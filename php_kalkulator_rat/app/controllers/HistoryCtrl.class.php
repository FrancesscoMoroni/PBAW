<?php
// W skrypcie definicji kontrolera nie trzeba dołączać już niczego.
// Kontroler wskazuje tylko za pomocą 'use' te klasy z których jawnie korzysta
// (gdy korzysta niejawnie to nie musi - np używa obiektu zwracanego przez funkcję)

// Zarejestrowany autoloader klas załaduje odpowiedni plik automatycznie w momencie, gdy skrypt będzie go chciał użyć.
// Jeśli nie wskaże się klasy za pomocą 'use', to PHP będzie zakładać, iż klasa znajduje się w bieżącej
// przestrzeni nazw - tutaj jest to przestrzeń 'app\controllers'.

// Przypominam, że tu również są dostępne globalne funkcje pomocnicze - o to nam właściwie chodziło

namespace app\controllers;


class HistoryCtrl {

    private $database;
    private $data;

	/** 
	 * Konstruktor - inicjalizacja właściwości
	 */
	public function __construct(){
        try{
            $this->database = new \lib\Medoo\Medoo([
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
        } catch (\PDOException $ex) {
            getMessages()->addError("DB Error: ".$ex->getMessage());
        }
	}

    
	public function action_history(){
        
        $this->data = $this->database->select("wynik", [
            "ID",
            "loan",
            "installment",
            "interest",
            "inAmount",
            "result"
        ]);

		$this->generateView();
	}

	public function generateView(){
		
        getSmarty()->assign('user',unserialize($_SESSION['user']));

		getSmarty()->assign('page_title','Klakulator rat kredytu');

		getSmarty()->assign('db',$this->data);
		
		getSmarty()->display('HistoryView.tpl');
	}
}
