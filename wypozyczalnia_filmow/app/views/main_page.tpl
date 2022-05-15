{extends file="main.tpl"}

{block name=content}

				<!-- Main -->
				<div id="main">
				<div class="inner">
					<header>
						<h1>{$title|default:"Nie ma tytułu"}</h1>
						<p>{$description|default:"Nie ma opisu"}</p>
					</header>

					<!-- Tiles -->
					
					<section class="tiles">
						<!-- TODO: wyświetlanie w pętli odpowiedniej ilości obiektów -->
					{foreach $filmData as $film}
						{strip}
						<article>							
							<span class="image">
								<img src="{$conf->images_root}/{$film["film_img"]}.jpg" alt="" />
							</span>
							<a href = "{$conf->action_url}viewFilm/{$film["idfilms"]}">
								<!--{$conf->action_url}viewFilm/{$film["idfilms"]}-->
								<div class="content">{$film["name"]}</div>
							</a>
						</article>
						{/strip}
					{/foreach}
							
					</section>
				</div>
				</div>

{/block}
