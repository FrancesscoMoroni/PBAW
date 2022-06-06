<?php

namespace app\controllers;

use app\forms\SearchForm;
use core\App;
use core\SessionUtils;
use core\RoleUtils;
use core\Utils;
use core\ParamUtils;

class MainPageCtrl {

    private $filmData;
    private $searchForm;
    private $pageNumber;

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->searchForm = new SearchForm();
    }

    public function getFilmData() {

        $this->searchForm->name = ParamUtils::getFromRequest('searchName');
        $this->searchForm->filter = ParamUtils::getFromRequest('searchFiltr');
        $currentPage = ParamUtils::getFromRequest('page');
        if (empty($currentPage))
            $currentPage = 1;

        // 2. Przygotowanie mapy z parametrami wyszukiwania (nazwa_kolumny => wartość)
        $search_params = []; //przygotowanie pustej struktury (aby była dostępna nawet gdy nie będzie zawierała wierszy)
        if (isset($this->searchForm->name) && strlen($this->searchForm->name) > 0) {
            $search_params['name[~]'] = $this->searchForm->name . '%'; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
        }

        // 3. Pobranie listy rekordów z bazy danych
        // W tym wypadku zawsze wyświetlamy listę osób bez względu na to, czy dane wprowadzone w formularzu wyszukiwania są poprawne.
        // Dlatego pobranie nie jest uwarunkowane poprawnością walidacji (jak miało to miejsce w kalkulatorze)
        //przygotowanie frazy where na wypadek większej liczby parametrów
        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }
        //dodanie frazy sortującej po nazwisku
        if( !empty($this->searchForm->filter) ) {
            $filters = explode("_",$this->searchForm->filter);
            $where ["ORDER"][$filters[0]] = $filters[1];
        } else {
            $where ["ORDER"] = "name";
        }

        $this->pageNumber = intval(ceil(App::getDB()->count("films",$where) / 6));

        $offset = 6*($currentPage - 1);

        $where ["LIMIT"] = [$offset, 6];
        
        //wykonanie zapytania

        try {

            $this->filmData = App::getDB()->select("films", [
                "idfilms",
                "name",
                "film_img",
                "price"
            ], $where);

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

    public function action_viewSearchMain() {
        $this->getFilmData();

        App::getSmarty()->assign("filmData", $this->filmData);
        App::getSmarty()->assign("pageNumber", $this->pageNumber);

        App::getSmarty()->display("main_page_tiles.tpl");
    }

    public function action_viewNextPageMain() {
        $this->getFilmData();

        App::getSmarty()->assign("filmData", $this->filmData);
        App::getSmarty()->assign("pageNumber", $this->pageNumber);

        App::getSmarty()->display("main_page_tiles.tpl");
    }

    public function generateView() {

        
        $admin = RoleUtils::inRole("admin");
        App::getSmarty()->assign("admin", $admin);

        $logedIn = !SessionUtils::load("login", $keep = true);
        App::getSmarty()->assign("logedIn", empty($logedIn));

        App::getSmarty()->assign("title", "Film to go");
        App::getSmarty()->assign("description", "Wypożycz filmy z największej biblioteki filmów na UŚ");

        App::getSmarty()->assign("filmData", $this->filmData);
        App::getSmarty()->assign("pageNumber", $this->pageNumber);

        App::getSmarty()->display("main_page.tpl");
    }
    
}
