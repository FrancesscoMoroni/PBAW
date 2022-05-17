<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;

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
        return !App::getMessages()->isError();
    }

    public function action_viewFilm() {
        if( $this->validateFilm() ) {
            $this->getData();
            $this->generateView();
        }
        else {
            App::getRouter()->forwardTo('viewMain');
        }
        
    }

    public function validateAddFilm() { 

        $login = SessionUtils::load("login", $keep = true);

        $this->accountID = App::getDB()->get("users", "idusers" ,[
            "users_idusers" => $login
        ]);

        $hasActiveOrder = App::getDB()->has("movie_rental", [
            "users_idusers" => $this->accountID,
            "rental_status" => 1
        ]);

        return $hasActiveOrder;
    }

    public function creatNewOrder() {

        App::getDB()->insert("movie_rental", [
            "movie_rental_idmovie_rental" => $this->orderID,
            "films_idfilms" => $this->filmID,
            "price" => $this->filmData[0]["price"]
        ]);
    }


    public function action_addFilm() {
        if ( $this->validateAddFilm() ) {

            $this->orderID = App::getDB()->get("movie_rental", "idmovie_rental",[
                "users_idusers" => $this->accountID,
                "rental_status" => 1
            ]);

            App::getDB()->insert("movie_rental_has_films", [
                "movie_rental_idmovie_rental" => $this->orderID,
                "films_idfilms" => $this->filmID,
                "price" => $this->filmData[0]["price"]
            ]);

        } else {
            $this->creatNewOrder();
        }
        App::getRouter()->redirectTo("viewFilm");
    }
    
    public function generateView() {

        App::getSmarty()->assign("filmData", $this->filmData);
        App::getSmarty()->assign("directorData", $this->directorData);
        App::getSmarty()->assign("title", $this->filmData[0]["name"]);

        App::getSmarty()->display("film_page.tpl");
    }
}
