{extends file="main.tpl"}

{block name=content}

				<!-- Main -->
				<div id="main">
				<div class="inner">
					<header>
						<h1>{$filmData[0]["name"]|default:"Nie ma tytułu"}</h1>
						{if $admin}
						<p><a href="{$conf->action_url}viewEditFilm/{$filmData[0]["idfilms"]}" class="button">Edytuj</a></p> <!-- TODO: edytowanie filmu tylko dla administratorów -->
						{/if}
					</header>
				<span class="image page"><img src="{$conf->images_root}/{$filmData[0]["film_img"]}.jpg" alt="" /></span><br>
				<h4>{$directorData[0]["name"]} {$directorData[0]["surname"]}</h4>
				<h4>{$filmData[0]["movie_genre"]|default:"Gatunek"}</h4>
				<h4>{$filmData[0]["release_date"]|default:"Data wydania"}</h4>
				<p>{$filmData[0]["description"]|default:"Nie ma jeszcze opisu filmu"}</p>
				<h2>{$filmData[0]["rating"]|default:"0"} / 10</h2>
				<h2>{$filmData[0]["price"]|default:"0"} zł</h2>

				<button onclick="ajaxPostAndReload('{$conf->action_url}addFilmToCart/{$filmData[0]['idfilms']}', 'messages')">Dodaj do koszyka</button>		

				<div id="messages">
					{include file="messages.tpl"}
				</div>

				</div>
				</div>

{/block}
