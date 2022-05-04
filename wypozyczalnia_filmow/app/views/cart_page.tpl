{extends file="main.tpl"}

{block name=content}

<div id="wrapper">

<div id="main">
	<div class="inner">
		<header>
			<h1>{$title|default:"brak tytułu"}<br /></h1>
			<p>{$description|default:"brak opisu"}</p>
		</header>
	</div>
</div>

</div>

{/block}
