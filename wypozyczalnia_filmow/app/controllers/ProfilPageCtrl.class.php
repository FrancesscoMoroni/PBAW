<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\SessionUtils;
use core\RoleUtils;

class ProfilPageCtrl {

    private $login;

    public function validateLogin() {

        $this->getLogin();
        if (empty(trim($this->login))) {
            Utils::addErrorMessage('Nie jesteś zalogowany');
        }

        return !App::getMessages()->isError();
    }

    public function action_logout() {

        if ( RoleUtils::inRole("admin") ) {

            RoleUtils::removeRole("admin");
            SessionUtils::remove("login");

        } else if( RoleUtils::inRole("user") ) {

            RoleUtils::removeRole("user");
            SessionUtils::remove("login");

        }
        
        App::getRouter()->forwardTo('viewMainPage');
    }
    
    public function getLogin() {
       $this->login = SessionUtils::load("login", $keep = true);
    }

    public function action_viewProfil() {
       
        if( $this->validateLogin() ) {
            $this->generateView();
        } else {           
            App::getRouter()->forwardTo('viewMainPage');
        }
    }

    public function generateView() {
        
        // assign to Smarty
        App::getSmarty()->assign("title", "Konto użytkownika");
        App::getSmarty()->assign("description", $this->login);

        App::getSmarty()->display("profil_page.tpl");        
    }
    
}
