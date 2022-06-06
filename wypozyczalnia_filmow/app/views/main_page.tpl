{extends file="main.tpl"}

{block name=content}

				<!-- Main -->
				<div id="main">
				<div class="inner">
					<header>
						<h1>{$title|default:"Nie ma tytułu"}</h1>
						<p>{$description|default:"Nie ma opisu"}</p>
					</header>

					<!-- Search --> <!-- TODO: AJAX wyszukiwanie po nazwie + filtr -->
					<section>
					<form id="searchForm" onsubmit="ajaxSearch('searchForm','{$conf->action_root}viewSearchMain','tiles', '{$conf->action_root}viewMain'); return false;">
						<div class="row gtr-uniform">
							<div class="col-4 col-12-xsmall">
								<input type="text" name="searchName" id="searchName" value="" placeholder="Wpisz nazwę" />
							</div>
							<div class="col-2 col-12-xsmall">
								<select name="searchFiltr" id="searchFiltr">
										<option value="">Filtr</option>
										<option value="name_ASC">Nazwa ↑</option>
										<option value="name_DESC">Nazwa ↓</option>
										<option value="price_ASC">Cena ↑</option>
										<option value="price_DESC">Cena ↓</option>
								</select>
							</div>
							<div class="col-2 col-12-xsmall">
								<input type="submit" value="Szukaj" class="small primary" />
							</div>
						</div>
					</form>
					</section>

					<!-- Tiles -->
					<div id="tiles">
						{include file="main_page_tiles.tpl"}
					</div>
				</div>
				</div>
				<script>
					ajaxPaginationScroll( '{$conf->action_root}viewNextPageMain', 'tiles', {$pageNumber} );
				</script>
				
				

				

{/block}
