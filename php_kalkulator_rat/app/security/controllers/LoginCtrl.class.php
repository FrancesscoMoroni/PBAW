<?php

require_once 'LoginForm.class.php';

class LoginCtrl {
    private $form;

    //Kontruktor
    public function __construct(){
		//stworzenie potrzebnych obiektów
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
            getMessages()->addError('Nie podano loginu');
        }
        if ( $this->form->password == "") {
            getMessages()->addError('Nie podano hasła');
        }

        //nie ma sensu walidować dalej, gdy brak parametrów
        if (getMessages()->isError()) return false;

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
        
        getMessages()->addError('Niepoprawny login lub hasło');
        return false; 
    }

    public function process(){
		$this->getParametrs();
		
		if ($this->validation()) {
			header("Location: ".getConf()->app_url.'/ctrl.php?action=calcCompute');	
		}
		
		$this->generateView();
	}
	
	
	/**
	 * Wygenerowanie widoku
	 */
	public function generateView(){

		getSmarty()->assign('form',$this->form);
		getSmarty()->display('login.tpl');

	}


}

