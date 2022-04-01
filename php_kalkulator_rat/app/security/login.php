<?php
require_once dirname(__FILE__).'/../../config.php';
//pobranie parametrów
include_once $conf->root_path.'/app/security/security_class/LoginCtrl.class.php';

// utwórz obiekt i uzyj
$login = new LoginCtrl ();
$login->process();