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
				<input type="text" name="demo-name" id="demo-name" value="" placeholder="Nazwa Filmu" />
			</div>
			<div class="col-6 col-12-xsmall"></div>
			<div class="col-4 col-12-xsmall">
				<input type="text" name="demo-name" id="demo-name" value="" placeholder="Imię Reżysera" />
			</div>
			<div class="col-4 col-12-xsmall">
				<input type="text" name="demo-name" id="demo-name" value="" placeholder="Nazwisko Reżysera" />
			</div>
			<div class="col-3 col-12-xsmall"></div>
			<div class="col-4 col-12-xsmall">
				<input type="text" name="demo-name" id="demo-name" value="" placeholder="Data wydania" />
			</div>
			<div class="col-6 col-12-xsmall"></div>
			<div class="col-4 col-12-xsmall">
				<select name="demo-category" id="demo-category">
					<option value="">Gatunek</option>
					<option value="1">Gatunek 1</option>
					<option value="1">Gatunek 1</option>
				</select>
			</div>
			<div class="col-6 col-12-xsmall"></div>
			<div class="col-4 col-12-xsmall">
				<select name="demo-category" id="demo-category">
					<option value="">Ocena</option>
					{for $i=1 to 10}
						<option value="{$i}">{$i}</option>
					{/for}
				</select>
			</div>
			
			<div class="col-12">
				<ul class="actions">
					<li><input type="submit" value="Dodaj" class="primary" /></li>
					<li><input type="reset" value="Reset" /></li>
					<!-- <li><a href="{url action='viewLogin'}" class="button">Zaloguj</a></li> -->
				</ul>
			</div>
			<div class="col-6 col-12-xsmall"></div>
			<div class="col-4 col-12-xsmall">
				<input type="text" name="demo-name" id="demo-name" value="" placeholder="Cena"	 />
			</div>
		</div>
	</form>
	</section>
	
</div>
</div>

{/block}
