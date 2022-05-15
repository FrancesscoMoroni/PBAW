<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class AddFilmPageCtrl {
    
    public function action_viewAddFilm() {
        
        // assign to Smarty
        App::getSmarty()->assign("title", "Dodawanie nowego filmu");
        App::getSmarty()->assign("description", " ");

        App::getSmarty()->display("addFilm_page.tpl");
        
    }
    
}
