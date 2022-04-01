<?php

require_once $conf->root_path.'/libs/smarty/Smarty.class.php';
require_once $conf->root_path.'/libs/Messages.class.php';
require_once $conf->root_path.'/app/security/security_class/LoginForm.class.php';


class LoginCtrl {
    private $form;
    private $msgs;

    //Kontruktor
    public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->msgs = new Messages();
		$this->form = new LoginForm();
	}

    function getParametrs()
    {
        $this->form->login = isset ($_REQUEST ['login']) ? $_REQUEST ['login'] : null;
        $this->form->password = isset ($_REQUEST ['pass']) ? $_REQUEST ['pass'] : null;
    }

    function validation()
    {
            // sprawdzenie, czy parametry zostały przekazane
        if ( ! (isset($this->form->login) && isset($this->form->password))) {
            //sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
            return false;
        }

        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if ( $this->form->login == "") {
            $this->msgs->addError('Nie podano loginu');
        }
        if ( $this->form->password == "") {
            $this->msgs->addError('Nie podano hasła');
        }

        //nie ma sensu walidować dalej, gdy brak parametrów
        if ($this->msgs->isError()) return false;

        // sprawdzenie, czy dane logowania są poprawne
        // - takie informacje najczęściej przechowuje się w bazie danych
        //   jednak na potrzeby przykładu sprawdzamy bezpośrednio
        if ($this->form->login == "admin" && $this->form->password == "admin") {
            session_start();
            $_SESSION['role'] = 'admin';
            return true;
        }
        if ($this->form->login == "user" && $this->form->password == "user") {
            session_start();
            $_SESSION['role'] = 'user';
            return true;
        }
        
        $this->msgs->addError('Niepoprawny login lub hasło');
        return false; 
    }

    public function process(){
        global $conf;
		$this->getParametrs();
		
		if ($this->validation()) {
			header("Location: ".$conf->app_url);	
		}
		
		$this->generateView();
	}
	
	
	/**
	 * Wygenerowanie widoku
	 */
	public function generateView(){
		global $conf;
		
		$smarty = new Smarty();
		$smarty->assign('conf',$conf);
		
		$smarty->assign('form',$this->form);
        $smarty->assign('msgs',$this->msgs);
		
		$smarty->display($conf->root_path.'/app/security/security_class/login.tpl');
	}


}

