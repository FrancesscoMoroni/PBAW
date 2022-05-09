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
						<article>
							<span class="image">
								<img src="{$conf->images_root}/Jojo_Rabbit.jpg" alt="" />
							</span>
							<a>
								<h2>{$film_title|default:"Nie ma tytułu filmu"}</h2>
								<div class="content">
									<p>{$film_description|default:"Nie ma opisu filmu sadsad  asdsad dsadsa"}</p>
								</div>
							</a>
						</article>
						
						
						<article>
							<span class="image">
								<img src="{$conf->images_root}/Avengers_Endgame.jpg" alt="" />
							</span>
							<a>
								<h2>{$film_title|default:"Nie ma tytułu filmu"}</h2>
								<div class="content">
									<p>{$film_description|default:"Nie ma opisu filmu"}</p>
								</div>
								
							</a>
						</article>

						<article>
							<span class="image">
								<img src="{$conf->images_root}/Sherlock_Holmes.jpg" alt="" />
							</span>
							<a>
								<h2>{$film_title|default:"Nie ma tytułu filmu"}</h2>
								<div class="content">
									<p>{$film_description|default:"Nie ma opisu filmu"}</p>
								</div>						
							</a>
						</article>

						<article>
							<span class="image">
								<img src="{$conf->images_root}/Harry_Potter.jpg" alt="" />
							</span>
							<a>
								<h2>{$film_title|default:"Nie ma tytułu filmu"}</h2>
								<div class="content">
									<p>{$film_description|default:"Nie ma opisu filmu"}</p>
								</div>
							</a>
						</article>
						
					</section>
				</div>
				</div>

{/block}
