{extends file="../templates/main.tpl"}

{block name=footer}Mam nadzieję że wszystko zadziałało poprawnie{/block}

{block name=content}

<h2 class="content-head is-center">Prosty kalkulator</h2>

<div class="pure-g">
<div class="l-box-lrg pure-u-1 pure-u-med-1-3">
	<form class="pure-form pure-form-stacked" action="{$app_url}/app/calc.php" method="post">
		<fieldset>
			<label for="id_loan">Wysokość kredytu: </label>
			<input id="id_loan" type="text" placeholder="wysokość kredytu" name="loan" value="{$form['loan']}" />

			<label for="id_interest">Oprocentowanie w skali roku: </label>
			<input id="id_interest" type="text" placeholder="oprocentowanie" name="interest" value="{$form['interest']}" />

			<label for="id_installment">Ilość rat w ciągu roku: </label>
			<input id="id_installment" type="text" placeholder="ilość rat w ciągu roku" name="installment" value="{$form['installment']}" />

			<label for="id_inAmount">Ilość rat: </label>
			<input id="id_inAmount" type="text" placeholder="ilość rat" name="inAmount" value="{$form['inAmount']}" />

			<button type="submit" class="pure-button">Oblicz</button>
		</fieldset>
	</form>
</div>

<div class="l-box-lrg pure-u-1 pure-u-med-3-5">

{*wyświeltenie listy błędów, jeśli istnieją*}
{if (isset($messages))} 
	{if (count ( $messages ) > 0)} 
	    <h4>Wystąpiły błędy: </h4>
	    <ol class="err">
		{foreach $messages as $msg }
            {strip}
                <li>{$msg}</li>
            {/strip}
        {/foreach}	
		</ol>
    {/if}
{/if}

{if (isset($result))}
	<h4>Wynik</h4>
	<p class="res">
    {$result}
	</p>
{/if}

</div>

</div>

{/block}