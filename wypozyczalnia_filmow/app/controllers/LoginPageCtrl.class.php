<?php

namespace app\controllers;

use core\App;
use core\RoleUtils;
use core\SessionUtils;
use core\Utils;
use core\ParamUtils;

use app\forms\LoginForm;

class LoginPageCtrl {

    private $form; //dane formularza
    private $account;

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new LoginForm();
    }

    // Walidacja danych przed zapisem (nowe dane lub edycja).
    public function validateLogin() {
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

        if( !$this->account[0]["password"] == $this->form->pass ) {
            Utils::addErrorMessage('Złe hasło');
        }

        if (App::getMessages()->isError())
            return false;

        return !App::getMessages()->isError();
    }

    public function action_login() {
        
        // 1. Walidacja danych formularza (z pobraniem)
        if ($this->validateLogin()) {
            SessionUtils::store("iduser", $this->account[0]["idusers"]);
            SessionUtils::store("login", $this->form->login);
            RoleUtils::addRole($this->account[0]["role"]);
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
                $this->account = App::getDB()->select("users", "*",[
                    "login" => $this->form->login
                ]);

                Utils::addInfoMessage("Poprawnie zalogowanie");

            } else {
                Utils::addErrorMessage("Nie ma takiego konta");
            }

        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas logowania');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
    }
    
    public function action_viewLogin() {
        $this->generateVeiw();
    }
    
    public function generateVeiw() {
        
        // assign to Smarty
        App::getSmarty()->assign("title", "Logowanie");
        App::getSmarty()->assign("description", " ");

        App::getSmarty()->display("login_page.tpl");
        
    }
    
}
