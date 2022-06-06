{extends file="main.tpl"}

{block name=content}
<script type="text/javascript" src="{$conf->asset_root}/js/paginationNumbers.js"></script>

				<!-- Main -->
				<div id="main">
				<div class="inner">
					<header>
						<h1>{$title|default:"Nie ma tytułu"}</h1>
						<p>{$description|default:"Nie ma opisu"}</p>
						<a href="{$conf->action_url}logout" class="button">Wyloguj</a>
					</header>
				<section>
					<h2>Historia zamówień</h2>
					{if isset( $rentalData )}
					<div class="table-wrapper">
						<table>
							<thead>
								<tr>
									<th>ID</th>
									<th>Data zmówienia</th>
									<th>Data oddania</th>
									<th>Cena</th>
								</tr>
							</thead>
							<tbody id="table">
								
									{include file="profile_page_table.tpl"}
							</tbody>
						</table>
					</div>
					{/if}
					{include file="number_pagination.tpl"}
				</section>
				{include file="messages.tpl"}
				</div>
				</div>

				<script>
					setPageNumber( {$pageNumber} );
					setTableUrl( '{$conf->action_root}viewTable' );
				</script>

{/block}
