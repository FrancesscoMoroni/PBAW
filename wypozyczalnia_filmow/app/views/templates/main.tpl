<!DOCTYPE HTML>
<html>
	<head>
		<title>{$title|default:"brak tytułu"}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="https://unpkg.com/purecss@2.1.0/build/pure-min.css" integrity="sha384-yHIFVG6ClnONEA5yB5DJXfW2/KC173DIQrYoZMEtBvGzmf0PKiGyNEqe9N6BNDBH" crossorigin="anonymous">
		<link rel="stylesheet" href="{$conf->asset_root}/css/main.css" />
		<noscript><link rel="stylesheet" href="{$conf->asset_root}/css/noscript.css" /></noscript>
	</head>
<body>
		{block name=content} Domyślna treść zawartości .... {/block}
</body>
</html>