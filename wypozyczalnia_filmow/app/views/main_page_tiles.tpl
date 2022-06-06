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
                <div class="content">
                    {$film["name"]}<br>
                    {$film["price"]} zł
                </div>
			</a>
		</article>
		{/strip}
	{/foreach}							
</section>
<br>
<div id="pageNumber" style="display: none;">{$pageNumber}</div>