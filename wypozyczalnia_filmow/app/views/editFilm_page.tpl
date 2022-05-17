{extends file="main.tpl"}

{block name=content}


<!-- Main -->
<div id="main">
<div class="inner">
	<header>
		<h1>{$title|default:"Nie ma tytułu"}</h1>
	</header>

	<!-- Form -->
	<section>
	<form method="post" action="{$conf->action_root}editFilm">
		<div class="row gtr-uniform">
			<div class="col-4 col-12-xsmall">
				<input type="text" name="filmName" id="filmName" value="{$filmData[0]["name"]}" placeholder="Nazwa Filmu" />
			</div>
			<div class="col-6 col-12-xsmall"></div>
			<div class="col-4 col-12-xsmall">
				<input type="text" name="filmDirectorName" id="filmDirectorName" value="{$directorData[0]["name"]}" placeholder="Imię reżysera" />
			</div>
			<div class="col-4 col-12-xsmall">
				<input type="text" name="filmDirectorSurname" id="filmDirectorSurname" value="{$directorData[0]["surname"]}" placeholder="Nazwisko reżysera" />
			</div>
			<div class="col-3 col-12-xsmall"></div>
			<div class="col-4 col-12-xsmall">
				<input type="text" name="filmDate" id="filmDate" value="{$filmData[0]["release_date"]}" placeholder="Data wydania" />
			</div>
			<div class="col-6 col-12-xsmall"></div>
			<div class="col-4 col-12-xsmall">
				<input type="text" name="filmGenre" id="filmGenre" value="{$filmData[0]["movie_genre"]}" placeholder="Gatunek filmu" />
			</div>
			<div class="col-6 col-12-xsmall"></div>
			<div class="col-4 col-12-xsmall">
				<input type="text" name="filmDescription" id="filmDescription" value="{$filmData[0]["description"]}" placeholder="Opis filmu" />
			</div>
			<div class="col-6 col-12-xsmall"></div>
			<div class="col-4 col-12-xsmall">
				<select name="filmRating" id="filmRating">
					<option value="{$filmData[0]["rating"]}">{$filmData[0]["rating"]}</option>
					{for $i=1 to 10}
						<option value="{$i}">{$i}</option>
					{/for}
				</select>
			</div>
			<div class="col-6 col-12-xsmall"></div>
			<div class="col-4 col-12-xsmall">
				<input type="text" name="filmImg" id="filmImg" value="{$filmData[0]["film_img"]}" placeholder="Nazwa pliku jpg" />
			</div>
			<div class="col-6 col-12-xsmall"></div>
			<div class="col-4 col-12-xsmall">
				<input type="text" name="filmPrice" id="filmPrice" value="{$filmData[0]["price"]}" placeholder="Cena"	 />
			</div>
			<div class="col-12">
				<ul class="actions">
					<li><input type="submit" value="Edytuj" class="primary" /></li>
					<li><input type="reset" value="Reset" /></li>
				</ul>
			</div>
			<div class="col-6 col-12-xsmall">
				<input type="hidden" name="filmID" id="filmID" value="{$filmID}" placeholder="ID" />
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
