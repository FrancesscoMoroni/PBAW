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

    public function isLoggedIn() {
        return !empty( SessionUtils::load("login", $keep = true) );
    }

    // Walidacja danych przed zapisem (nowe dane lub edycja).
    public function validateLogin() {

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

        if( !( $this->account[0]["password"] == $this->form->pass ) ) {
            Utils::addErrorMessage("Błedne hasło lub login");
        }   

        if (App::getMessages()->isError())
            return false;

        return !App::getMessages()->isError();
    }

    public function action_login() {
        
        if ( $this->isLoggedIn() ) {
            App::getRouter()->redirectTo('viewMain');
        }

        // 1. Walidacja danych formularza (z pobraniem)
        if ($this->validateLogin()) {
            SessionUtils::store("iduser", $this->account[0]["idusers"]);
            SessionUtils::store("login", $this->form->login);
            RoleUtils::addRole($this->account[0]["role"]);
        } else {
            // 3c. Gdy błąd walidacji to pozostań na stronie
            $this->generateMessages();
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

            } else {
                Utils::addErrorMessage("Błędne hasło lub login");
            }

        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas logowania');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
    }
    
    public function action_viewLogin() {
        
        if ( $this->isLoggedIn() ) {
            App::getRouter()->redirectTo('viewMain');
        }

        $this->generateVeiw();
    }

    public function generateMessages() {
        App::getSmarty()->display("messages.tpl");
    }
    
    public function generateVeiw() {
        
        $admin = RoleUtils::inRole("admin");
        App::getSmarty()->assign("admin", $admin);

        $logedIn = !SessionUtils::load("login", $keep = true);
        App::getSmarty()->assign("logedIn", empty($logedIn));

        // assign to Smarty
        App::getSmarty()->assign("title", "Logowanie");
        App::getSmarty()->assign("description", " ");

        App::getSmarty()->display("login_page.tpl");
        
    }
    
}
