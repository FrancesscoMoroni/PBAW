<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class LoginPageCtrl {
    
    public function action_viewLogin() {
        
        // assign to Smarty
        App::getSmarty()->assign("title", "Logowanie");
        App::getSmarty()->assign("description", " ");

        App::getSmarty()->display("login_page.tpl");
        
    }
    
}
