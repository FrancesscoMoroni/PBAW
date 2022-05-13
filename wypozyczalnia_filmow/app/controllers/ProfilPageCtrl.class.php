<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class ProfilPageCtrl {
    
    public function action_viewProfil() {
        
        // assign to Smarty
        App::getSmarty()->assign("title", "Profil Użytkownika");
        App::getSmarty()->assign("description", " ");

        App::getSmarty()->display("profil_page.tpl");
        
    }
    
}
