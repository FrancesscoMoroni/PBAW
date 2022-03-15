<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
	<title>Kalkulator rat kredytu</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>

<div style="width:90%; margin: 2em auto;">
	<a href="<?php print(_APP_ROOT); ?>/app/inna_chroniona.php" class="pure-button">kolejna chroniona strona</a>
	<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>

<div style="width:90%; margin: 2em auto;">

<form action="<?php print(_APP_ROOT); ?>/app/calc.php" method="post" class="pure-form pure-form-stacked">
	<legend>Kalkulator</legend>
	<fieldset>
		<label for="id_loan">Wysokość kredytu: </label>
		<input id="id_loan" type="text" name="loan" value="<?php out($loan) ?>" /><br />
		<label for="id_interest">Oprocentowanie w skali roku: </label>
		<input id="id_interest" type="text" name="interest" value="<?php out($interest) ?>" /><br />
		<label for="id_installment">Ilość rat w ciągu roku: </label>
		<input id="id_installment" type="text" name="installment" value="<?php out($installment) ?>" /><br />
		<label for="id_inAmount">Ilość rat: </label>
		<input id="id_inAmount" type="text" name="inAmount" value="<?php out($inAmount) ?>" /><br />
	</fieldset>	
	<input type="submit" value="Oblicz" class="pure-button pure-button-primary" />
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (count($messages) != 0)
{
	echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
    foreach ( $messages as $key => $msg )
    {
	echo '<li>'.$msg.'</li>';
	}
	echo '</ol>';
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Wysokość raty: '.$result.' zł'; ?>
</div>
<?php } ?>

</body>
</html>