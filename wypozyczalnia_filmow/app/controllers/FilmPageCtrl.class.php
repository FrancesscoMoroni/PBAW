<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class FilmPageCtrl {
    
    public function action_viewFilm() {
        
        // assign to Smarty
        App::getSmarty()->assign("title", "NazwaFilmu");
        App::getSmarty()->assign("description", " ");
        App::getSmarty()->assign("filmDescription", "");
        App::getSmarty()->assign("filmRating", "");
        App::getSmarty()->assign("filmDirector", "");
        App::getSmarty()->assign("filmGenre", "");
        App::getSmarty()->assign("filmDate", "");
        App::getSmarty()->assign("filmPrice", "100");

        App::getSmarty()->display("film_page.tpl");
        
    }

    public function action_addFilm() {
        App::getRouter()->redirectTo("viewFilm");
    }
    
}
