<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class EditFilmPageCtrl {
    
    public function action_viewEditFilm() {
        
        // assign to Smarty
        App::getSmarty()->assign("title", "Edytowanie filmu");
        App::getSmarty()->assign("description", " ");
        App::getSmarty()->assign("filmTitle", "NazwaFilmu");
        App::getSmarty()->assign("description", " ");
        App::getSmarty()->assign("filmDescription", "");
        App::getSmarty()->assign("filmRating", "");
        App::getSmarty()->assign("filmDirector", "");
        App::getSmarty()->assign("filmGenre", "");
        App::getSmarty()->assign("filmDate", "");
        App::getSmarty()->assign("filmPrice", "100");

        App::getSmarty()->display("editFilm_page.tpl");
        
    }
    
}
