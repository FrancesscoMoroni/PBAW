{extends file="main.tpl"}

{block name=content}

<!-- Main -->
<div id="main">
<div class="inner">
	<header>
		<h1>{$title|default:"Nie ma tytułu"}</h1>
		<p>{$description|default:"Nie ma opisu"}</p>
	</header>

	<!-- Form -->
	<section>
	<form id="loginForm" onsubmit="ajaxPostFormRedirect('loginForm','{$conf->action_root}login','error','{$conf->action_root}viewMain'); return false;">
		<div class="row gtr-uniform">
			<div class="col-4 col-12-xsmall">
				<input type="text" name="login" id="login" value="" placeholder="Login" />
			</div>
			<div class="col-6 col-12-xsmall"></div>
			<div class="col-4 col-12-xsmall">
				<input type="password" name="pass" id="pass" value="" placeholder="Password" />
			</div>
			<div class="col-12">
				<ul class="actions">
					<li><input type="submit" value="Zaloguj" class="primary" /></li>
					<li><a href="{url action='viewRegister'}" class="button">Zarejestruj</a></li>
				</ul>
			</div>
			<!-- TODO: AJAX, zapisywanie + wyświetlanie errorów -->
		</div>
	</form>
	</section>

	<div id = "error">
		{include file="messages.tpl"}
	</div>
	
	
</div>
</div>

{/block}
