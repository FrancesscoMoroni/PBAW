<?php
// Skrypt kontrolera głównego uruchamiający określoną
// akcję użytkownika na podstawie przekazanego parametru

//każdy punkt wejścia aplikacji (skrypt uruchamiany bezpośrednio przez klienta) musi dołączać konfigurację
require_once 'init.php';


include_once $conf->root_path.'/app/security/check.php';

//2. wykonanie akcji
switch ($action) {
	default : // 'logowanie'
		include_once $conf->root_path.'/app/security/controllers/LoginCtrl.class.php';
		// utwórz obiekt i uzyj
		$login = new LoginCtrl();
		$login->generateView();
	break;
	case 'loginTry' :
		include_once $conf->root_path.'/app/security/controllers/LoginCtrl.class.php';
		// utwórz obiekt i uzyj
		$login = new LoginCtrl();
		$login->process();
	break;
	case 'calcCompute' :
		// załaduj definicję kontrolera
		include_once $conf->root_path.'/app/calc/controllers/CalcCtrl.class.php';
		// utwórz obiekt i uzyj
		$ctrl = new CalcCtrl ();
		$ctrl->process ();
	break;
}