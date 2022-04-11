<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Logowanie</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>

<link rel="stylesheet" href="{$conf->app_url}/css/style.css">

<div style="width:90%; margin: 2em auto;">

<form class="pure-form pure-form-stacked" action="{$conf->action_root}loginTry" method="post">
	<legend>Logowanie</legend>
	<fieldset>
		<label for="id_login">login: </label>
		<input id="id_login" type="text" name="login" value="{$form->login}" />
		<label for="id_pass">pass: </label>
		<input id="id_pass" type="password" name="pass" value="{$form->password}"/>
	</fieldset>
	<input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>
</form>	


{if $msgs->isError()} 
		<ol style="padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">
		{foreach $msgs->getErrors() as $err } 
			<li>{$err}</li>
		{/foreach}
		</ol>
{/if}

</div>

</body>
</html>