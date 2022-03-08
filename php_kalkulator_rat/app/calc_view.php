<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator</title>
</head>
<body>

<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
	<label for="id_loan">Wysokość kredytu: </label>
	<input id="id_loan" type="text" name="loan" value="<?php if(isset($loan)) { print($loan); }  ?>" /><br />
	<label for="id_interest">Oprocentowanie w skali roku: </label>
    <input id="id_interest" type="text" name="interest" value="<?php if(isset($interest)) { print($interest); }  ?>" /><br />
    <label for="id_installment">Ilość rat w ciągu roku: </label>
    <input id="id_installment" type="text" name="installment" value="<?php if(isset($installment)) { print($installment); }  ?>" /><br />
	<label for="id_inAmount">Ilość rat: </label>
	<input id="id_inAmount" type="text" name="inAmount" value="<?php if(isset($inAmount)) { print($inAmount); } ?>" /><br />
	<input type="submit" value="Oblicz" />
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
<?php echo 'Wysokość raty: '.$result; ?>
</div>
<?php } ?>

</body>
</html>