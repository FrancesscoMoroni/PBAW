<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\SessionUtils;
use core\RoleUtils;
use core\ParamUtils;

use Medoo\Medoo;

class ProfilPageCtrl {

    private $login;
    private $rentalData;
    private $userID;
    private $pageNumber;

    public function getLogin() {
        $this->login = SessionUtils::load("login", $keep = true);
    }

    public function getUserID() {
        $this->userID = SessionUtils::load("iduser", $keep = true);
    }

    public function howManyPages() {

        try {
            $this->pageNumber = intval(ceil(App::getDB()->count("movie_rental", [
                "[><]movie_rental_has_films" => ["idmovie_rental" => "movie_rental_idmovie_rental"]
            ],[
                "@idmovie_rental"
            ] ,[
                "AND" =>
                    [
                        "rental_status" => 1,
                        "users_idusers" => $this->userID
                    ]
            ])) / 10
        ); 

        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas pobierania danych');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

    }
    

    public function getRentalData() {

        $currentPage = ParamUtils::getFromRequest('page');
        if( empty($currentPage) ) {
            $currentPage = 0;
        }

        $this->getUserID();

        $where = [
            "AND" =>
                [
                    "rental_status" => 1,
                    "users_idusers" => $this->userID
                ],
           "GROUP" => [
                    "idmovie_rental"
                ],
            "LIMIT" => [($currentPage) * 10, 10]
           ];

        try {
            $this->rentalData = App::getDB()->select("movie_rental", [
                "[><]movie_rental_has_films" => ["idmovie_rental" => "movie_rental_idmovie_rental"]
            ],[
                "idmovie_rental",
                "rental_date",
                "return_date",
                "un_price" => Medoo::raw("SUM(DISTINCT <movie_rental_has_films.price>)")

            ], $where); 

        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas pobierania danych');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
    }

    public function action_logout() {

        if ( RoleUtils::inRole("admin") ) {

            RoleUtils::removeRole("admin");
            SessionUtils::remove("login");
            SessionUtils::remove("iduser");

        } else if( RoleUtils::inRole("normal") ) {

            RoleUtils::removeRole("normal");
            SessionUtils::remove("login");
            SessionUtils::remove("iduser");
        }
        
        App::getRouter()->forwardTo('viewMainPage');
    }

    public function action_viewProfil() {
        $this->getLogin();
        $this->getRentalData();
        $this->howManyPages();
        $this->generateView();
    }

    public function action_viewTable() {

        $this->getLogin();
        $this->getRentalData();
        $this->generateTable();

    }

    public function generateTable() {
        
        App::getSmarty()->assign("rentalData", $this->rentalData);

        App::getSmarty()->display("profile_page_table.tpl"); 
    }

    public function generateView() {

        $admin = RoleUtils::inRole("admin");
        App::getSmarty()->assign("admin", $admin);

        $logedIn = !SessionUtils::load("login", $keep = true);
        App::getSmarty()->assign("logedIn", empty($logedIn));

        // assign to Smarty
        if( !empty($this->rentalData) ) {
            App::getSmarty()->assign("rentalData", $this->rentalData);
        }

        App::getSmarty()->assign("pageNumber", $this->pageNumber);

        App::getSmarty()->assign("title", "Konto użytkownika");
        App::getSmarty()->assign("description", $this->login);

        App::getSmarty()->display("profil_page.tpl");        
    }
    
}
