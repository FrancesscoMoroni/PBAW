<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

require_once _ROOT_PATH.'/libs/smarty/Smarty.class.php';
// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

include _ROOT_PATH.'/app/security/check.php';

// pobranie parametrów
function getParametrs(&$form)
{
	$form['loan'] = isset($_REQUEST ['loan']) ? $_REQUEST ['loan'] : null;
	$form['installment'] = isset($_REQUEST ['installment']) ? $_REQUEST ['installment'] : null;
	$form['interest'] = isset($_REQUEST ['interest']) ? $_REQUEST ['interest'] : null;
	$form['inAmount'] = isset($_REQUEST ['inAmount']) ? $_REQUEST ['inAmount'] : null;
}


// walidacja parametrów z przygotowaniem zmiennych dla widoku
function validation(&$form, &$messages, &$hide_intro)
{
	// sprawdzenie, czy parametry zostały przekazane
	if ( !( isset($form['loan']) && isset($form['installment']) && isset($form['interest']) && isset($form['inAmount']) ) ) {
		//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		return false;
	}

	$hide_intro = true;

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $form['loan'] == "") {
		$messages [] = 'Nie podano wartości kredytu';
	}
	if ( $form['interest'] == "") {
		$messages [] = 'Nie podano oprocentowania kredytu';
	}
	if ( $form['installment'] == "") {
		$messages [] = 'Nie podano ilości rat na rok';
	}
	if ( $form['inAmount'] == "") {
		$messages [] = 'Nie podano ilości wszystkich rat';
	}

	//nie ma sensu walidować dalej gdy brak parametrów
	if( count($messages) != 0 ) return false;
		
	// sprawdzenie, czy podane parametry są liczbami całkowitymi
	if (! is_numeric( $form['loan'] ))
	{
		$messages [] = 'Wartość kredytu nie jest liczbą całkowitą';
	}
	if (! is_numeric( $form['interest'] ))
	{
		$messages [] = 'Wartość oprocentowania kredytu nie jest liczbą całkowitą';
	}
	if (! is_numeric( $form['installment'] ) )
	{
			$messages [] = 'Ilośc rat na rok nie jest liczbą całkowitą';
	}
	if (! is_numeric( $form['inAmount'] ))
	{
			$messages [] = 'Ilość wszystkich rat kredytu nie jest liczbą całkowitą';
	}

	if( count($messages) != 0 ) return false;
	else return true;
	
}

// Wykonywanie obliczeń
function process(&$form, &$result)
{
	 $result = round( ( $form['loan'] * $form['interest'] ) / ( $form['installment'] * ( 1 - ( $form['installment'] / ( $form['installment'] + $form['interest'] ) ) ** $form['inAmount'] ) ), 2);
}

$form = null;
$result = null;
$messages = array();
$hide_intro = false;

getParametrs($form);
if( validation($form, $messages, $hide_intro) )
{
	process($form, $result);
}

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Kalkulator rat kredytu');
$smarty->assign('page_description','Podstawowy kalkulatr służący do obliczania rat kredytu');
$smarty->assign('page_header','Kalkulator rat kredytu');

$smarty->assign('hide_intro',$hide_intro);

//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);

// 5. Wywołanie szablonu
$smarty->display(_ROOT_PATH.'/app/calc.tpl');

?>