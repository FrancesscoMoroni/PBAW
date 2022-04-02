<?php
// Skrypt kontrolera głównego uruchamiający określoną
// akcję użytkownika na podstawie przekazanego parametru

//każdy punkt wejścia aplikacji (skrypt uruchamiany bezpośrednio przez klienta) musi dołączać konfigurację
require_once 'init.php';


include_once getConf()->root_path.'/app/security/check.php';

//2. wykonanie akcji
switch ($action) {
	default : // 'logowanie'
		$ctrl = new app\security\controllers\LoginCtrl();
		// utwórz obiekt i uzyj
		$ctrl->generateView();
	break;
	case 'loginTry' :
		$ctrl = new app\security\controllers\LoginCtrl();
		// utwórz obiekt i uzyj
		$ctrl->process();
	break;
	case 'calcCompute' :
		$ctrl = new app\calc\controllers\CalcCtrl();
		// utwórz obiekt i uzyj
		$ctrl->process();
	break;
	case 'logout' :
		//session_start();
		session_destroy();
		header("Location: ".getConf()->app_url);
	break;
}