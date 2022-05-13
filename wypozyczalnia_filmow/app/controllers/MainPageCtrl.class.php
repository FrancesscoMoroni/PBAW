<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class MainPageCtrl {
    
    public function action_viewMain() {

        App::getSmarty()->assign("title", "Film to go");
        App::getSmarty()->assign("description", "Wypożycz filmy z największej biblioteki filmów na UŚ");

        App::getSmarty()->display("main_page.tpl");
        
    }
    
}
