<?php

require_once $conf->root_path.'/libs/smarty/Smarty.class.php';
require_once $conf->root_path.'/libs/Messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';

class CalcCtrl {
    private $form;
    private $result;
    private $msgs;
    private $hide_intro;


    //Kontruktor
    public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->msgs = new Messages();
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
            $this->msgs->addError('Nie podano wartości kredytu');
        }
        if ( $this->form->interest == "") {
            $this->msgs->addError('Nie podano oprocentowania kredytu');
        }
        if ( $this->form->installment == "") {
            $this->msgs->addError('Nie podano ilości rat na rok');
        }
        if ( $this->form->inAmount == "") {
            $this->msgs->addError('Nie podano ilości wszystkich rat');
        }

        //nie ma sensu walidować dalej gdy brak parametrów
        if( $this->msgs->isError() ) return false;
            
        // sprawdzenie, czy podane parametry są liczbami całkowitymi
        if (! is_numeric( $this->form->loan ))
        {
            $this->msgs->addError('Wartość kredytu nie jest liczbą całkowitą');
        }
        if (! is_numeric( $this->form->interest ))
        {
            $this->msgs->addError('Wartość oprocentowania kredytu nie jest liczbą całkowitą');
        }
        if (! is_numeric( $this->form->installment ) )
        {
            $this->msgs->addError('Ilośc rat na rok nie jest liczbą całkowitą');
        }
        if (! is_numeric( $this->form->inAmount ))
        {
            $this->msgs->addError('Ilość wszystkich rat kredytu nie jest liczbą całkowitą');
        }

        return ! $this->msgs->isError();
    }

    public function process(){

		$this->getParametrs();
		
		if ($this->validation()) {
				
			//konwersja parametrów na int
			$this->msgs->addInfo('Parametry poprawne.');

            $this->form->loan = $this->form->loan;
            $this->form->installment = $this->form->installment;
            $this->form->interest = $this->form->interest;
            $this->form->inAmount = $this->form->inAmount;
				
			//wykonanie operacji
            $this->result->result = round( ( $this->form->loan * $this->form->interest ) / ( $this->form->installment * ( 1 - ( $this->form->installment / ( $this->form->installment + $this->form->interest ) ) ** $this->form->inAmount ) ), 2);
			
			$this->msgs->addInfo('Wykonano obliczenia.');
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
		
		$smarty->assign('page_title','Kalkulator rat');
		$smarty->assign('page_description','Prosty kalkulator kredytowy');
		$smarty->assign('page_header','Kalkulator rat kredytu');
				
		$smarty->assign('hide_intro',$this->hide_intro);
		
		$smarty->assign('form',$this->form);
        $smarty->assign('res',$this->result);
        $smarty->assign('msgs',$this->msgs);
		
		$smarty->display($conf->root_path.'/app/calc.tpl');
	}


}

