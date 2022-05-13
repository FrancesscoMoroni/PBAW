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
	<form method="post" action="#">
		<div class="row gtr-uniform">
			<div class="col-4 col-12-xsmall">
				<input type="text" name="demo-name" id="demo-name" value="" placeholder="Login" />
			</div>
			<div class="col-6 col-12-xsmall"></div>
			<div class="col-4 col-12-xsmall">
				<input type="text" name="demo-name" id="demo-name" value="" placeholder="Password" />
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
	
</div>
</div>

{/block}
