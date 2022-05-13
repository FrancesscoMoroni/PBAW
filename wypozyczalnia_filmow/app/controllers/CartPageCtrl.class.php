<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class CartPageCtrl {
    
    public function action_viewCart() {
        
        // assign to Smarty
        App::getSmarty()->assign("title", "Koszyczek");
        App::getSmarty()->assign("description", "Zawartość koszyka");

        App::getSmarty()->display("cart_page.tpl");
        
    }
    
}
