<?php

require_once 'CalcForm.class.php';
require_once 'CalcResult.class.php';

class CalcCtrl {
    private $form;
    private $result;
    private $msgs;
    private $hide_intro;


    //Kontruktor
    public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new CalcForm();
		$this->result = new CalcResult();
		$this->hide_intro = false;
	}

    function getParametrs()
    {
        $this->form->loan = isset($_REQUEST ['loan']) ? $_REQUEST ['loan'] : null;
        $this->form->installment = isset($_REQUEST ['installment']) ? $_REQUEST ['installment'] : null;
        $this->form->interest = isset($_REQUEST ['interest']) ? $_REQUEST ['interest'] : null;
        $this->form->inAmount = isset($_REQUEST ['inAmount']) ? $_REQUEST ['inAmount'] : null;
    }

    function validation()
    {
        // sprawdzenie, czy parametry zostały przekazane
        if ( !( isset($this->form->loan) && isset($this->form->installment) && isset($this->form->interest) && isset($this->form->inAmount) ) ) {
            //sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
            return false;
        } else{
            $this->hide_intro = true;
        }

        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if ( $this->form->loan == "") {
            getMessages()->addError('Nie podano wartości kredytu');
        }
        if ( $this->form->interest == "") {
            getMessages()->addError('Nie podano oprocentowania kredytu');
        }
        if ( $this->form->installment == "") {
            getMessages()->addError('Nie podano ilości rat na rok');
        }
        if ( $this->form->inAmount == "") {
            getMessages()->addError('Nie podano ilości wszystkich rat');
        }

        //nie ma sensu walidować dalej gdy brak parametrów
        if( getMessages()->isError() ) return false;
            
        // sprawdzenie, czy podane parametry są liczbami całkowitymi
        if (! is_numeric( $this->form->loan ))
        {
            getMessages()->addError('Wartość kredytu nie jest liczbą całkowitą');
        }
        if (! is_numeric( $this->form->interest ))
        {
            getMessages()->addError('Wartość oprocentowania kredytu nie jest liczbą całkowitą');
        }
        if (! is_numeric( $this->form->installment ) )
        {
            getMessages()->addError('Ilośc rat na rok nie jest liczbą całkowitą');
        }
        if (! is_numeric( $this->form->inAmount ))
        {
            getMessages()->addError('Ilość wszystkich rat kredytu nie jest liczbą całkowitą');
        }

        return ! getMessages()->isError();
    }

    public function process(){

		$this->getParametrs();
		
		if ($this->validation()) {
				
			//konwersja parametrów na int
			getMessages()->addInfo('Parametry poprawne.');

            $this->form->loan = $this->form->loan;
            $this->form->installment = $this->form->installment;
            $this->form->interest = $this->form->interest;
            $this->form->inAmount = $this->form->inAmount;
				
			//wykonanie operacji
            $this->result->result = round( ( $this->form->loan * $this->form->interest ) / ( $this->form->installment * ( 1 - ( $this->form->installment / ( $this->form->installment + $this->form->interest ) ) ** $this->form->inAmount ) ), 2);
			
			getMessages()->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}
	
	
	/**
	 * Wygenerowanie widoku
	 */
	public function generateView(){
		
		getSmarty()->assign('page_title','Kalkulator rat');
		getSmarty()->assign('page_description','Prosty kalkulator kredytowy');
		getSmarty()->assign('page_header','Kalkulator rat kredytu');
				
		getSmarty()->assign('hide_intro',$this->hide_intro);
		
		getSmarty()->assign('form',$this->form);
        getSmarty()->assign('res',$this->result);
		
		getSmarty()->display('calc.tpl');
	}


}

