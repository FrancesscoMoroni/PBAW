{extends file="main.tpl"}

{block name=content}

				<!-- Main -->
				<div id="main">
				<div class="inner">
					<header>
						<h1>{$title|default:"Nie ma tytułu"}</h1>
						<p>{$description|default:"Nie ma opisu"}</p>
						<p><a href="{url action='viewEditFilm'}" class="button">Edytuj</a></p> <!-- TODO: edytowanie filmu tylko dla administratorów -->
					</header>
				
				<span class="image page"><img src="{$conf->images_root}/Jojo_Rabbit.jpg" alt="" /></span><br>
				<h4>{$filmDirector|default:"Imię Nazwisko"}</h4>
				<h4>{$filmGenre|default:"Gatunek"}</h4>
				<h4>{$filmDate|default:"Data wydania"}</h4>
				<p>{$filmDescription|default:"Nie ma jeszcze opisu filmu"}</p>
				<h2>{$filmRating|default:"0"} / 10</h2>
				<h2>{$filmPrice|default:"0"} zł</h2>
				<a href="{url action='addFilm'}" class="button">Dodaj do koszyka</a>
						
					
				</div>
				</div>

{/block}
