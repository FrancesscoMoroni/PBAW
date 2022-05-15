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
					<h2>Historia zamówień</h2>
					<div class="table-wrapper">
						<table>
							<thead>
								<tr>
									<th>ID</th>
									<th>Ilość</th>
									<th>Cena</th>
								</tr>
							</thead>
							<tbody>
								<!-- TODO: tworzenie w pętli -->
								<tr>
									<td>12354243</td>
									<td>3</td>
									<td>24.32</td>
								</tr>
								<!---->

							</tbody>
						</table>
					</div>
				</section>
				</div>
				</div>

{/block}
