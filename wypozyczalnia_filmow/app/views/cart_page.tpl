{extends file="main.tpl"}

{block name=content}

<!-- Main -->
<div id="main">
<div class="inner">
	<header>
		<h1>{$title|default:"Nie ma tytułu"}</h1>
		<p>{$description|default:"Nie ma opisu"}</p>
	</header>

	<section>
		<h2>Table</h2>
		<h3>Default</h3>
		<div class="table-wrapper">
			<table>
				<thead>
					<tr>
						<th>Name</th>
						<th>Description</th>
						<th></th>
						<th>Price</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<!-- TODO: tworzenie w pętli -->
					<tr>
						<td>Item One</td>
						<td>Ante turpis integer aliquet porttitor.</td>
						<td></td>
						<td>29.99</td>
						<td> 
							<ul class="actions">
								<li><a href="#" class="button primary fit small">X</a></li>
							</ul>
						</td>
					</tr>
					<!---->
					<tr>
						<td>Item two</td>
						<td>Ante turpis integer aliquet porttitor.</td>
						<td></td>
						<td>29.99</td>
						<td> 
							<ul class="actions">
								<li><a href="#" class="button primary fit small">X</a></li>
							</ul>
						</td>
					</tr>

					<tr>
						<td>Item Three</td>
						<td>Ante turpis integer aliquet porttitor.</td>
						<td></td>
						<td>29.99</td>
						<td> 
							<ul class="actions">
								<li><a href="#" class="button primary fit small">X</a></li>
							</ul>
						</td>
					</tr>

				</tbody>
				<tfoot>
					<tr>
						<td colspan="2"></td>
						<td>Koszt</td>
						<td>100</td>
						
					</tr>
					<tr>
						<td colspan="3"></td>
						<td>
							<ul class="actions">
								<li><a href="#" class="button fit small">Wypożyczam</a></li>
							</ul>
						</td>
					</tr>
				</tfoot>
			</table>
		</div>
	</section>
</div>
</div>

{/block}
