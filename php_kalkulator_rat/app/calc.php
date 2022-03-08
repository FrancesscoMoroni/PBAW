<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// pobranie parametrów
function getParametrs(&$loan, &$installment, &$interest, &$inAmount)
{
	$loan = isset($_REQUEST ['loan']) ? $_REQUEST ['loan'] : null;
	$installment = isset($_REQUEST ['installment']) ? $_REQUEST ['installment'] : null;
	$interest = isset($_REQUEST ['interest']) ? $_REQUEST ['interest'] : null;
	$inAmount = isset($_REQUEST ['inAmount']) ? $_REQUEST ['inAmount'] : null;
}


// walidacja parametrów z przygotowaniem zmiennych dla widoku
function validation(&$loan, &$installment, &$interest, &$inAmount, &$messages)
{
	// sprawdzenie, czy parametry zostały przekazane
	if ( !( isset($loan) && isset($installment) && isset($interest) && isset($inAmount) ) ) {
		//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		return false;
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
	if( count($messages) != 0 ) return false;
		
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

	if( count($messages) != 0 ) return false;
	else return true;
	
}

// Wykonywanie obliczeń
function process(&$loan, &$installment, &$interest, &$inAmount, &$result)
{
	 $result = ( $loan * $interest ) / ( $installment * ( 1 - ( $installment / ( $installment + $interest ) ) ** $inAmount ) );
}

$loan = null;
$installment = null;
$interest = null;
$inAmount = null;
$result = null;
$messages = array();

getParametrs($loan, $installment, $interest, $inAmount);
if( validation($loan, $installment, $interest, $inAmount, $messages) )
{
	process($loan, $installment, $interest, $inAmount, $result);
}

include 'calc_view.php';