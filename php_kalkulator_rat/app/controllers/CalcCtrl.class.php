<?php
// W skrypcie definicji kontrolera nie trzeba dołączać już niczego.
// Kontroler wskazuje tylko za pomocą 'use' te klasy z których jawnie korzysta
// (gdy korzysta niejawnie to nie musi - np używa obiektu zwracanego przez funkcję)

// Zarejestrowany autoloader klas załaduje odpowiedni plik automatycznie w momencie, gdy skrypt będzie go chciał użyć.
// Jeśli nie wskaże się klasy za pomocą 'use', to PHP będzie zakładać, iż klasa znajduje się w bieżącej
// przestrzeni nazw - tutaj jest to przestrzeń 'app\controllers'.

// Przypominam, że tu również są dostępne globalne funkcje pomocnicze - o to nam właściwie chodziło

namespace app\controllers;

//zamieniamy zatem 'require' na 'use' wskazując jedynie przestrzeń nazw, w której znajduje się klasa
use app\forms\CalcForm;
use app\transfer\CalcResult;

/** Kontroler kalkulatora
 * @author Przemysław Kudłacik
 *
 */
class CalcCtrl {

	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $result; //inne dane dla widoku

	/** 
	 * Konstruktor - inicjalizacja właściwości
	 */
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}
	
	/** 
	 * Pobranie parametrów
	 */
	public function getParams(){
		$this->form->loan = getFromRequest('loan');
		$this->form->installment = getFromRequest('installment');
		$this->form->interest = getFromRequest('interest');
		$this->form->inAmount = getFromRequest('inAmount');
	}
	
	/** 
	 * Walidacja parametrów
	 * @return true jeśli brak błedów, false w przeciwnym wypadku 
	 */
	public function validate() {
		// sprawdzenie, czy parametry zostały przekazane
		if ( !( isset($this->form->loan) && isset($this->form->installment) && isset($this->form->interest) && isset($this->form->inAmount) ) ) {
            //sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
            return false;
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
	
	/** 
	 * Pobranie wartości, walidacja, obliczenie i wyświetlenie
	 */
	public function action_calcCompute(){

		$this->getParams();
		
		if ($this->validate()) {
			
			getMessages()->addInfo('Parametry poprawne.');
				
			//wykonanie operacji
            $this->result->result = round( ( $this->form->loan * $this->form->interest ) / ( $this->form->installment * ( 1 - ( $this->form->installment / ( $this->form->installment + $this->form->interest ) ) ** $this->form->inAmount ) ), 2);

			
			getMessages()->addInfo('Wykonano obliczenia.');

			try{
				$database = new \lib\Medoo\Medoo([
					'type' => 'mysql',
					'host' => 'localhost',
					'database' => 'kalk',
					'username' => 'root',
					'password' => '',
					'charset' => 'utf8',
					'collation' => 'utf8_polish_ci',
					'port' => 3306,

					'option' => [
						\PDO::ATTR_CASE => \PDO::CASE_NATURAL,
						\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
					]
				]);

				$database->insert("wynik", [
						"loan" => $this->form->loan,
						"installment" => $this->form->installment,
						"interest" => $this->form->interest,
						"inAmount" => $this->form->inAmount,
						"result" => $this->result->result
				]);

			} catch (\PDOException $ex)
			{
				getMessages()->addError("DB Error: ".$ex->getMessage());
			}

		}
		
		$this->generateView();
	}
	
	public function action_calcShow(){
		getMessages()->addInfo('Witaj w kalkulatorze');
		$this->generateView();
	}
	
	/**
	 * Wygenerowanie widoku
	 */
	public function generateView(){

		getSmarty()->assign('user',unserialize($_SESSION['user']));
				
		getSmarty()->assign('page_title','Klakulator rat kredytu');

		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		
		getSmarty()->display('CalcView.tpl');
	}
}
