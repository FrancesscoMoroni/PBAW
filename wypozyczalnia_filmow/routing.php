<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('viewMain'); #default action
App::getRouter()->setLoginRoute('viewLogin'); #action to forward if no permissions

//Akcje związane z MainPage
Utils::addRoute('viewMain', 'MainPageCtrl');
Utils::addRoute('viewSearchMain', 'MainPageCtrl');
Utils::addRoute('viewNextPageMain', 'MainPageCtrl');

//Akcje związane z CartPage
Utils::addRoute('viewCart', 'CartPageCtrl', ['normal', 'admin']);
Utils::addRoute('deleteItem', 'CartPageCtrl', ['normal', 'admin']);
Utils::addRoute('rentFilms', 'CartPageCtrl', ['normal', 'admin']);

//Akcje związane z ProfilPage
Utils::addRoute('viewProfil', 'ProfilPageCtrl', ['normal', 'admin']);
Utils::addRoute('logout', 'ProfilPageCtrl', ['normal', 'admin']);
Utils::addRoute('viewTable', 'ProfilPageCtrl', ['normal', 'admin']);

//Akcje związane z LoginPage
Utils::addRoute('viewLogin', 'LoginPageCtrl');
Utils::addRoute('login', 'LoginPageCtrl');

//Akcje związane z RegisterPage
Utils::addRoute('viewRegister', 'RegisterPageCtrl');
Utils::addRoute('register', 'RegisterPageCtrl');

//Akcje związane z FilmPage
Utils::addRoute('viewFilm', 'FilmPageCtrl');
Utils::addRoute('addFilmToCart', 'FilmPageCtrl', ['normal', 'admin']);

//Akcje związane z AddFilmPage
Utils::addRoute('viewAddFilm', 'AddFilmPageCtrl', 'admin');
Utils::addRoute('addFilm', 'AddFilmPageCtrl', 'admin');

//Akcje związane z EditFilmPage
Utils::addRoute('viewEditFilm', 'EditFilmPageCtrl', 'admin');
Utils::addRoute('editFilm', 'EditFilmPageCtrl', 'admin');