<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;

use app\forms\FilmForm;

class AddFilmPageCtrl {
    
    private $form; //dane formularza

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new FilmForm();
    }

    // Walidacja danych przed zapisem (nowe dane lub edycja).
    public function validateSave() {
        //0. Pobranie parametrów z walidacją
        //$this->form->filmID = ParamUtils::getFromRequest('filmID', true, 'Błędne wywołanie aplikacji');
        $this->form->filmName = ParamUtils::getFromRequest('filmName', true, 'Błędna próba pobrania filmName');
        $this->form->filmDirectorName = ParamUtils::getFromRequest('filmDirectorName', true, 'Błędna próba pobrania filmDirectorName');
        $this->form->filmDirectorSurname = ParamUtils::getFromRequest('filmDirectorSurname', true, 'Błędna próba pobrania filmDirectorSurname');
        $this->form->filmDate = ParamUtils::getFromRequest('filmDate', true, 'Błędna próba pobrania filmDate');
        $this->form->filmGenre = ParamUtils::getFromRequest('filmGenre', true, 'Błędna próba pobrania filmGenre');
        $this->form->filmRating = ParamUtils::getFromRequest('filmRating', true, 'Błędna próba pobrania filmRating');
        $this->form->filmImg = ParamUtils::getFromRequest('filmImg', true, 'Błędna próba pobrania filmImg');
        $this->form->filmPrice = ParamUtils::getFromRequest('filmPrice', true, 'Błędna próba pobrania filmPrice');
        $this->form->filmDescription = ParamUtils::getFromRequest('filmDescription', true, 'Błędna próba pobrania filmDescription');


        if (App::getMessages()->isError())
            return false;

        // 1. sprawdzenie czy wartości wymagane nie są puste
        if (empty(trim($this->form->filmName))) {
            Utils::addErrorMessage('Wprowadź nazwę filmu');
        }
        if (empty(trim($this->form->filmDirectorName))) {
            Utils::addErrorMessage('Wprowadź imię reżysera filmu');
        }
        if (empty(trim($this->form->filmDirectorSurname))) {
            Utils::addErrorMessage('Wprowadź nazwisko reżysera filmu');
        }
        if (empty(trim($this->form->filmDate))) {
            Utils::addErrorMessage('Wprowadź datę wydania filmu');
        }
        if (empty(trim($this->form->filmGenre))) {
            Utils::addErrorMessage('Wprowadź gatunek filmu');
        }
        if (empty(trim($this->form->filmRating))) {
            Utils::addErrorMessage('Wprowadź ocenę filmu');
        }
        if (empty(trim($this->form->filmImg))) {
            Utils::addErrorMessage('Wprowadź nazwę obrazka');
        }
        if (!is_numeric($this->form->filmPrice)) {
            Utils::addErrorMessage('Źle podana cena');
        }

        $this->form->filmName = ltrim($this->form->filmName);
        $this->form->filmGenre = ltrim($this->form->filmGenre);
        $this->form->filmDirectorSurname = trim($this->form->filmDirectorSurname);
        $this->form->filmDirectorName = trim($this->form->filmDirectorName);

        if (App::getMessages()->isError())
            return false;

        // 2. sprawdzenie poprawności przekazanych parametrów

        $d = \DateTime::createFromFormat('Y-m-d', $this->form->filmDate);
        if ($d === false) {
            Utils::addErrorMessage('Zły format daty. Przykład: 2015-12-20');
        }

        return !App::getMessages()->isError();
    }
/*
    //validacja danych przed wyswietleniem do edycji
    public function validateEdit() {
        //pobierz parametry na potrzeby wyswietlenia danych do edycji
        //z widoku listy osób (parametr jest wymagany)
        $this->form->filmID = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }
*/

    public function action_viewAddFilm() {
        $this->generateView();
    }

    /*
    //wysiweltenie rekordu do edycji wskazanego parametrem 'id'
    public function action_personEdit() {
        // 1. walidacja id osoby do edycji
        if ($this->validateEdit()) {
            try {
                // 2. odczyt z bazy danych osoby o podanym ID (tylko jednego rekordu)
                $record = App::getDB()->get("person", "*", [
                    "idperson" => $this->form->id
                ]);
                // 2.1 jeśli osoba istnieje to wpisz dane do obiektu formularza
                $this->form->id = $record['idperson'];
                $this->form->name = $record['name'];
                $this->form->surname = $record['surname'];
                $this->form->birthdate = $record['birthdate'];
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }

        // 3. Wygenerowanie widoku
        $this->generateView();
    }
*/

/*
    public function action_personDelete() {
        // 1. walidacja id osoby do usuniecia
        if ($this->validateEdit()) {

            try {
                // 2. usunięcie rekordu
                App::getDB()->delete("person", [
                    "idperson" => $this->form->id
                ]);
                Utils::addInfoMessage('Pomyślnie usunięto rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }

        // 3. Przekierowanie na stronę listy osób
        App::getRouter()->forwardTo('personList');
    }
*/
    public function action_addFilm() {

        // 1. Walidacja danych formularza (z pobraniem)
        if ($this->validateSave()) {
            // 2. Zapis danych w bazie
            try {

                $hasDirector = App::getDB()->has("directors", [
                    "AND" => [
                        "name" => $this->form->filmDirectorName,
                        "surname" => $this->form->filmDirectorSurname
                    ]
                ]);

                if( !$hasDirector ) {
                    App::getDB()->insert("directors", [
                        "name" => $this->form->filmDirectorName,
                        "surname" => $this->form->filmDirectorSurname
                    ]);
                }

                $this->form->filmID = App::getDB()->select("directors", [
                    'iddirectors'
                ], [
                        "name" => $this->form->filmDirectorName,
                        "surname" => $this->form->filmDirectorSurname
                ]);

                //2.1 Nowy rekord
                //if ($this->form->id == '') {
                        App::getDB()->insert("films", [
                            "name" => $this->form->filmName,
                            "release_date" => $this->form->filmDate,
                            "movie_genre" => $this->form->filmGenre,
                            "rating" => $this->form->filmRating,
                            "film_img" => $this->form->filmImg,
                            "price" => $this->form->filmPrice,
                            "description" => $this->form->filmDescription,
                            "archival" => 0,
                            "directors_iddirectors" => $this->form->filmID[0]["iddirectors"]
                        ]);
                //} else {
                    /*
                    App::getDB()->update("person", [
                        "name" => $this->form->name,
                        "surname" => $this->form->surname,
                        "birthdate" => $this->form->birthdate
                            ], [
                        "idperson" => $this->form->id
                    ]);
                    */
                //}
                Utils::addInfoMessage('Pomyślnie zapisano film');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }

            // 3b. Po zapisie przejdź na stronę listy osób (w ramach tego samego żądania http)
            App::getRouter()->forwardTo('viewAddFilm');
        } else {
            // 3c. Gdy błąd walidacji to pozostań na stronie
            $this->generateView();
        }
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form); // dane formularza dla widoku
        App::getSmarty()->assign('title', "Dodawanie nowego filmu");
        App::getSmarty()->assign('description', "Tu możesz dodać nowy film");
        App::getSmarty()->display('addFilm_page.tpl');
    }

}
