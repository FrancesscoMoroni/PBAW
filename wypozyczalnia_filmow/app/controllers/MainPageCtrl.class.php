<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class MainPageCtrl {

    private $filmData;

    public function __construct() {
        //stworzenie potrzebnych obiektów
    }

    public function getFilmData() {

        try {

        $this->filmData = App::getDB()->select("films", [
            "idfilms",
            "name",
            "film_img"
        ]);

        Utils::addInfoMessage('Pomyślnie zapisano film');
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
    }
    
    public function action_viewMain() {
        $this->getFilmData();
        $this->generateView();
    }

    public function generateView() {
        App::getSmarty()->assign("title", "Film to go");
        App::getSmarty()->assign("description", "Wypożycz filmy z największej biblioteki filmów na UŚ");

        App::getSmarty()->assign("filmData", $this->filmData);

        App::getSmarty()->display("main_page.tpl");
    }
    
}
