<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('viewMain'); #default action
App::getRouter()->setLoginRoute('viewLogin'); #action to forward if no permissions

//Akcje związane z MainPage
Utils::addRoute('viewMain', 'MainPageCtrl');

//Akcje związane z CartPage
Utils::addRoute('viewCart', 'CartPageCtrl');

//Akcje związane z ProfilPage
Utils::addRoute('viewProfil', 'ProfilPageCtrl');

//Akcje związane z LoginPage
Utils::addRoute('viewLogin', 'LoginPageCtrl');
Utils::addRoute('login', 'LoginPageCtrl');

//Akcje związane z RegisterPage
Utils::addRoute('viewRegister', 'RegisterPageCtrl');
Utils::addRoute('register', 'RegisterPageCtrl');

//Akcje związane z FilmPage
Utils::addRoute('viewFilm', 'FilmPageCtrl');
Utils::addRoute('addFilm', 'FilmPageCtrl');

//Akcje związane z AddFilmPage
Utils::addRoute('viewAddFilm', 'AddFilmPageCtrl');
Utils::addRoute('addFilm', 'AddFilmPageCtrl');

//Akcje związane z EditFilmPage
Utils::addRoute('viewEditFilm', 'EditFilmPageCtrl', 'admin');
Utils::addRoute('editFilm', 'EditFilmPageCtrl', 'admin');