<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('viewMain'); #default action
//App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('viewCart', 'CartPageCtrl');
Utils::addRoute('viewMain', 'MainPageCtrl');
//Utils::addRoute('action_name', 'controller_class_name');