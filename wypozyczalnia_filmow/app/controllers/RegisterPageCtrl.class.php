<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class RegisterPageCtrl {
    
    public function action_viewRegister() {
        
        // assign to Smarty
        App::getSmarty()->assign("title", "Rejestrowanie");
        App::getSmarty()->assign("description", " ");

        App::getSmarty()->display("register_page.tpl");
        
    }
    
}
