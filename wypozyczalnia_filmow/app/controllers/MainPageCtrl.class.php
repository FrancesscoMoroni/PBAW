<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

/**
 * HelloWorld built in Amelia - sample controller
 *
 * @author Przemysław Kudłacik
 */
class MainPageCtrl {
    
    public function action_viewMain() {

        
        App::getMessages()->addMessage(new Message("Hello world message", Message::INFO));
        Utils::addInfoMessage("Or even easier message :-)");
        
        // assign to Smarty
        App::getSmarty()->assign("title", "Film to go");
        App::getSmarty()->assign("description", "Wypożycz filmy z największej biblioteki filmów na UŚ");

        App::getSmarty()->display("main_page.tpl");
        
    }
    
}
