<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\SessionUtils;
use core\RoleUtils;

class FilmPageCtrl {

    private $directorData;
    private $filmData;
    private $filmID;
    private $orderID;
    private $accountID;

    public function getData() {
        try {

            $this->filmData = App::getDB()->select("films", "*",[
                "idfilms" => $this->filmID
            ]);

            $this->directorData = App::getDB()->select("directors", "*",[
                "iddirectors" => $this->filmData[0]["directors_iddirectors"]
            ]);

        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas pobierania rekordu');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
    }
    
    public function validateFilm() {
        $this->filmID = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');

        if( !App::getDB()->has("films",["idfilms" => $this->filmID]) )
            Utils::addErrorMessage("Nie ma takiego filmu");

        return !App::getMessages()->isError();
    }

    public function action_viewFilm() {

        if( $this->validateFilm() ) {
            $this->getData();
            $this->generateView();
        }
        else {
            App::getRouter()->redirectTo('viewMain');
        }
        
    }

    public function validateAddFilm() { 

        
        $login = SessionUtils::load("login", $keep = true);

        $this->accountID = App::getDB()->get("users", "idusers" ,[
            "login" => $login
        ]);

        $hasActiveOrder = App::getDB()->has("movie_rental", [
            "users_idusers" => $this->accountID,
            "rental_status" => 2
        ]);

        return $hasActiveOrder;
    }

    public function creatNewOrder() {
        try {

            App::getDB()->insert("movie_rental", [
                "users_idusers" => $this->accountID,
                "rental_status" => 2,
            ]);

        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas dodawania nowego zamówienia');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

    }

    public function action_addFilmToCart() {
        
        if( $this->validateFilm() )
        {
            $this->getData();

            if ( !$this->validateAddFilm() ) {
            
                $this->creatNewOrder();
            }

        try {
                $this->orderID = App::getDB()->get("movie_rental", "idmovie_rental",[
                    "users_idusers" => $this->accountID,
                    "rental_status" => 2
                ]);

                App::getDB()->insert("movie_rental_has_films", [
                    "movie_rental_idmovie_rental" => $this->orderID,
                    "films_idfilms" => $this->filmID,
                    "price" => $this->filmData[0]["price"]
                ]);

            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas dodawania filmu do koszyka');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }

            if( !App::getMessages()->isError() ) {
                Utils::addInfoMessage("Dodano przedmiot do koszyka");
            }

            $this->generateMessages();
        } else {
            App::getRouter()->forwardTo('viewMain');
        }
        
    }
    
    public function generateMessages() {
        App::getSmarty()->display("messages.tpl");
    }

    public function generateView() {

        $admin = RoleUtils::inRole("admin");
        App::getSmarty()->assign("admin", $admin);

        $logedIn = !SessionUtils::load("login", $keep = true);
        App::getSmarty()->assign("logedIn", empty($logedIn));
        
        App::getSmarty()->assign("filmData", $this->filmData);
        App::getSmarty()->assign("directorData", $this->directorData);
        App::getSmarty()->assign("title", $this->filmData[0]["name"]);

        App::getSmarty()->display("film_page.tpl");
    }
}
