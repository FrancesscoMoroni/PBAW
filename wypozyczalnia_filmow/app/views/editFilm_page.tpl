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
	<form method="post" action="{$conf->action_root}addFilm">
		<div class="row gtr-uniform">
			<div class="col-4 col-12-xsmall">
				<input type="text" name="filmName" id="filmName" value="" placeholder="{$filmData[0]["name"]}" />
			</div>
			<div class="col-6 col-12-xsmall"></div>
			<div class="col-4 col-12-xsmall">
				<input type="text" name="filmDirectorName" id="filmDirectorName" value="" placeholder="{$directorData[0]["name"]}" />
			</div>
			<div class="col-4 col-12-xsmall">
				<input type="text" name="filmDirectorSurname" id="filmDirectorSurname" value="" placeholder="{$directorData[0]["surname"]}" />
			</div>
			<div class="col-3 col-12-xsmall"></div>
			<div class="col-4 col-12-xsmall">
				<input type="text" name="filmDate" id="filmDate" value="" placeholder="{$filmData[0]["release_date"]}" />
			</div>
			<div class="col-6 col-12-xsmall"></div>
			<div class="col-4 col-12-xsmall">
				<input type="text" name="filmGenre" id="filmGenre" value="" placeholder="{$filmData[0]["movie_genre"]}" />
			</div>
			<div class="col-6 col-12-xsmall"></div>
			<div class="col-4 col-12-xsmall">
				<input type="text" name="filmDescription" id="filmDescription" value="" placeholder="{$filmData[0]["description"]}" />
			</div>
			<div class="col-6 col-12-xsmall"></div>
			<div class="col-4 col-12-xsmall">
				<select name="filmRating" id="filmRating">
					<option value="">{$filmData[0]["rating"]}</option>
					{for $i=1 to 10}
						<option value="{$i}">{$i}</option>
					{/for}
				</select>
			</div>
			<div class="col-6 col-12-xsmall"></div>
			<div class="col-4 col-12-xsmall">
				<input type="text" name="filmImg" id="filmImg" value="" placeholder="{$filmData[0]["film_img"]}" />
			</div>
			<div class="col-6 col-12-xsmall"></div>
			<div class="col-4 col-12-xsmall">
				<input type="text" name="filmPrice" id="filmPrice" value="" placeholder="{$filmData[0]["price"]}"	 />
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
	{$form->filmID}
	
</div>
</div>


{/block}
