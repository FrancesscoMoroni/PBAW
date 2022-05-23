{extends file="main.tpl"}

{block name=content}

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
									<th>Koszt</th>
								</tr>
							</thead>
							<tbody>
							{foreach $rentalData as $rD}
								<tr>
									<td>{$rD["idmovie_rental"]}</td>
									<td>{$rD["rental_date"]}</td>
									<td>{$rD["return_date"]}</td>
									<td>{$rD["un_price"]}</td>
								</tr>
							{/foreach}
							</tbody>
						</table>
					</div>
					{/if}
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
