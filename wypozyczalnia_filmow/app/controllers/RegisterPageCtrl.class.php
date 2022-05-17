<?php

namespace app\controllers;

use core\App;
use core\RoleUtils;
use core\SessionUtils;
use core\Utils;
use core\ParamUtils;

use app\forms\LoginForm;

class RegisterPageCtrl {

    
    private $form; //dane formularza

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new LoginForm();
    }

    // Walidacja danych przed zapisem (nowe dane lub edycja).
    public function validateRegister() {
        //0. Pobranie parametrów z walidacją
        $this->form->login = ParamUtils::getFromRequest('login', true, 'Błędna próba pobrania filmName');
        $this->form->pass = ParamUtils::getFromRequest('pass', true, 'Błędna próba pobrania filmDirectorName');

        if (App::getMessages()->isError())
            return false;

        // 1. sprawdzenie czy wartości wymagane nie są puste
        if (empty(trim($this->form->login))) {
            Utils::addErrorMessage('Wprowadź login');
        }
        if (empty(trim($this->form->pass))) {
            Utils::addErrorMessage('Wprowadź hasło');
        }

        if (App::getMessages()->isError())
            return false;

        $this->form->login = ltrim($this->form->login);

        $this->getData();

        if (App::getMessages()->isError())
            return false;

        return !App::getMessages()->isError();
    }

    public function action_register() {
        
        // 1. Walidacja danych formularza (z pobraniem)
        if ( $this->validateRegister() ) {
            SessionUtils::store("login", $this->form->login);
            RoleUtils::addRole("normal");

            try {
                
                App::getDB()->insert("users", [
                    "login" => $this->form->login,
                    "password" => $this->form->pass,
                    "role" => "normal"
                ]);

            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas rejestrowania');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }

            Utils::addInfoMessage("Poprawna rejestracja użytkownika");

            //App::getRouter()->forwardTo('viewMain');
            $this->generateVeiw();
        } else {
            // 3c. Gdy błąd walidacji to pozostań na stronie
            $this->generateVeiw();
        }
    }

    public function getData() {
        try {

            $hasAccount = App::getDB()->has("users", [
                "login" => $this->form->login
            ]);

            if( $hasAccount ) {
                Utils::addErrorMessage("Konto o takiej nazwie użytkownika już istnieje");
            }

        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas rejestrowania');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
    }
    
    public function action_viewRegister() {
        $this->generateVeiw();
    }
   
    public function generateVeiw() {
        
        // assign to Smarty
        App::getSmarty()->assign("title", "Rejestrowanie");
        App::getSmarty()->assign("description", " ");

        App::getSmarty()->display("register_page.tpl");
        
    }
    
}
