<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. pobranie parametrów

$loan = $_REQUEST ['loan'];
$installment = $_REQUEST ['installment'];
$interest = $_REQUEST ['interest'];
$inAmount = $_REQUEST ['inAmount'];

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

// sprawdzenie, czy parametry zostały przekazane
if ( !( isset($loan) && isset($installment) && isset($interest) && isset($inAmount) ) ) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $loan == "") {
	$messages [] = 'Nie podano wartości kredytu';
}
if ( $interest == "") {
	$messages [] = 'Nie podano oprocentowania kredytu';
}
if ( $installment == "") {
	$messages [] = 'Nie podano ilości rat na rok';
}
if ( $inAmount == "") {
	$messages [] = 'Nie podano ilości wszystkich rat';
}

//nie ma sensu walidować dalej gdy brak parametrów
if ( empty( $messages ) )
{
	
	// sprawdzenie, czy podane parametry są liczbami całkowitymi
	if (! is_numeric( $loan ))
	{
		$messages [] = 'Wartość kredytu nie jest liczbą całkowitą';
	}
	if (! is_numeric( $interest ))
	{
		$messages [] = 'Wartość oprocentowania kredytu nie jest liczbą całkowitą';
	}
	if (! is_numeric( $installment ) )
	{
    		$messages [] = 'Ilośc rat na rok nie jest liczbą całkowitą';
    }
    if (! is_numeric( $inAmount ))
    {
    		$messages [] = 'Ilość wszystkich rat kredytu nie jest liczbą całkowitą';
    }

// 3. Jeśli nie ma błędów można zrobić obliczenia.

    if( empty( $messages ) )
    {
        $result = ( $loan * $interest ) / ( $installment * ( 1 - ( $installment / ( $installment + $interest ) ) ** $inAmount ) );
    }

}


// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$loan,$interest,$installment,$inAmount,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';