<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\SessionUtils;
use core\ParamUtils;

class CartPageCtrl {

    private $cartData;
    private $userID;
    private $sumPrice = 0;

    public function getUserID() {
        $this->userID = SessionUtils::load("iduser", $keep = true);
    }

    public function getOrderID() {
        $this->getUserID();

        return App::getDB()->get("movie_rental", "idmovie_rental", [
            "users_idusers" => $this->userID,
            "rental_status" => 2
        ]);
    }

    public function getFilmID() {
        return ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
    }

    public function sumPrice() {
        foreach( $this->cartData as $cD ) {
            $this->sumPrice += $cD["price"];
        }
    }

    public function getCartData() {

        try {

            $orderID = $this->getOrderID();

            $this->cartData = App::getDB()->select("films", [
                "[><]movie_rental_has_films" => ["idfilms" => "films_idfilms"]
            ], ["idfilms", "name", "movie_rental_has_films.price"] 
            ,[
                "movie_rental_has_films.movie_rental_idmovie_rental" => $orderID
            ]);

            

        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas pobierania danych');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        $this->sumPrice();

    }

    public function deleteItemDB() {
        
        try {

            $filmID = $this->getFilmID();
            $orderID = $this->getOrderID();

            App::getDB()->delete("movie_rental_has_films"
            , [
                "AND" => [
                    "movie_rental_idmovie_rental" => $orderID,
                    "films_idfilms" => $filmID
                ]
            ]);

        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas usuwania przedmiotu');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

    }


    public function rentFilmsDB() {
        $orderID = $this->getOrderID();

        App::getDB()->update("movie_rental", [
            "rental_status" => 1,
            "rental_date" => date("Y-m-d"),
            "return_date" => date("Y-m-d", mktime(0, 0, 0, date("m")  , date("d")+30, date("Y")))
        ] , [
            "idmovie_rental" => $orderID
        ]);
    }   

    public function action_rentFilms() {
        $this->rentFilmsDB();
        $this->action_viewCart();
    }

    public function action_deleteItem() {
        $this->deleteItemDB();
        $this->action_viewCart();
    }
    
    public function action_viewCart() {
        $this->getCartData();
        $this->generateView();
    }

    public function generateView() {
        
        // assign to Smarty
        if( !empty( $this->cartData ) ) {
            App::getSmarty()->assign("cartData", $this->cartData);
            App::getSmarty()->assign("sumPrice", $this->sumPrice);
        }
        App::getSmarty()->assign("title", "Koszyczek");
        App::getSmarty()->assign("description", "Zawartość koszyka");

        App::getSmarty()->display("cart_page.tpl");
    }
    
}
