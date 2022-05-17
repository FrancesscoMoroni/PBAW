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
	<form method="post" action="{url action='register'}">
		<div class="row gtr-uniform">
			<div class="col-4 col-12-xsmall">
				<input type="text" name="login" id="login" value="" placeholder="Login" />
			</div>
			<div class="col-6 col-12-xsmall"></div>
			<div class="col-4 col-12-xsmall">
				<input type="text" name="pass" id="pass" value="" placeholder="Password" />
			</div>
			<div class="col-12">
				<ul class="actions">
					<li><input type="submit" value="Zarejestruj" class="primary" /></li>
					<!-- <li><input type="submit" value="Zarejestruj" /></li> -->
					<li><a href="{url action='viewLogin'}" class="button">Zaloguj</a></li>
				</ul>
			</div>
		</div>
	</form>
	</section>
	
	{if $msgs->isMessage()}
		<div class="messages bottom-margin">
			<ul>
			{foreach $msgs->getMessages() as $msg}
			{strip}
				<li>{$msg->text}</li>
			{/strip}
			{/foreach}
			</ul>
		</div>
	{/if}

</div>
</div>

{/block}
