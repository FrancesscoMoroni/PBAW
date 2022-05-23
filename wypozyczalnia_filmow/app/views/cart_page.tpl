{extends file="main.tpl"}

{block name=content}

<!-- Main -->
<div id="main">
<div class="inner">
	<header>
		<h1>{$title|default:"Nie ma tytułu"}</h1>
		<p>{$description|default:"Nie ma opisu"}</p>
	</header>

	{if isset( $cartData )}
	{strip}
	<section>
		<div class="table-wrapper">
			<table>
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th></th>
						<th>Price</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
						{$i = 1}
						{foreach $cartData as $cD}
							
								<tr>
									<td>{$i++}</td>
									<td>{$cD["name"]}</td>
									<td></td>
									<td>{$cD["price"]}</td>
									<td> 
										<ul class="actions">
											<li><a href="{$conf->action_url}deleteItem/{$cD["idfilms"]}" class="button primary fit small">X</a></li>
										</ul>
									</td>
								</tr>	
						{/foreach}
					
				</tbody>
				<tfoot>
					<tr>
						<td colspan="2"></td>
						<td>Koszt</td>
						<td>{$sumPrice|default:" "}</td>
						
					</tr>
					<tr>
						<td colspan="3"></td>
						<td>
							<ul class="actions">
								<li><a href="{$conf->action_url}rentFilms" class="button fit small">Wypożyczam</a></li>
							</ul>
						</td>
					</tr>
				</tfoot>
			</table>
		</div>
	</section>
	{/strip}
	{/if}					

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
