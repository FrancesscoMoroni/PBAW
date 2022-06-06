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
	<form id="addPageForm" onsubmit="ajaxPostFormRedirect('addPageForm','{$conf->action_root}addFilm','error','{$conf->action_root}viewAddFilm'); return false;">
		<div class="row gtr-uniform">
			<div class="col-4 col-12-xsmall">
				<input type="text" name="filmName" id="filmName" value="" placeholder="Nazwa Filmu" />
			</div>
			<div class="col-6 col-12-xsmall"></div>
			<div class="col-4 col-12-xsmall">
				<input type="text" name="filmDirectorName" id="filmDirectorName" value="" placeholder="Imię Reżysera" />
			</div>
			<div class="col-4 col-12-xsmall">
				<input type="text" name="filmDirectorSurname" id="filmDirectorSurname" value="" placeholder="Nazwisko Reżysera" />
			</div>
			<div class="col-3 col-12-xsmall"></div>
			<div class="col-4 col-12-xsmall">
				<input type="text" name="filmDate" id="filmDate" value="" placeholder="Data wydania" />
			</div>
			<div class="col-6 col-12-xsmall"></div>
			<div class="col-4 col-12-xsmall">
				<input type="text" name="filmGenre" id="filmGenre" value="" placeholder="Gtunek filmu" />
			</div>
			<div class="col-6 col-12-xsmall"></div>
			<div class="col-6 col-12-xsmall">
				<input type="text" name="filmDescription" id="filmDescription" value="" placeholder="Opis filmu" />
			</div>
			<div class="col-6 col-12-xsmall"></div>
			<div class="col-4 col-12-xsmall">
				<select name="filmRating" id="filmRating">
					<option value="">Ocena</option>
					{for $i=1 to 10}
						<option value="{$i}">{$i}</option>
					{/for}
				</select>
			</div>
			<div class="col-6 col-12-xsmall"></div>
			<div class="col-4 col-12-xsmall">
				<input type="text" name="filmImg" id="filmImg" value="" placeholder="Nazwa obrazu filmu" />
			</div>
			<div class="col-6 col-12-xsmall"></div>
			<div class="col-4 col-12-xsmall">
				<input type="text" name="filmPrice" id="filmPrice" value="" placeholder="Cena"	 />
			</div>
			<div class="col-12">
				<ul class="actions">
					<li><input type="submit" value="Dodaj" class="primary" /></li>
					<li><input type="reset" value="Reset" /></li>
				</ul>
			</div>
			
		</div>
	</form>
	</section>

	<div id = "error">
		{include file="messages.tpl"}
	</div>

	
</div>
</div>

{/block}
