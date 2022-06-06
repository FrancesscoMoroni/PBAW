<!DOCTYPE HTML>
<html>
	<head>
		<title>{$title|default:"brak tytułu"}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{$conf->asset_root}/css/main.css" />
		<script type="text/javascript" src="{$conf->asset_root}/js/functions.js"></script>
		<noscript><link rel="stylesheet" href="{$conf->asset_root}/css/noscript.css" /></noscript>
	</head>
<body class="is-preload">

		<!-- Wrapper -->
		<div id="wrapper">

		<!-- Header -->
			<header id="header">
				<div class="inner">

					<!-- Nav -->
						<nav>
							<ul>
								<li><a href="#menu">Menu</a></li>
							</ul>
						</nav>

				</div>
			</header>

		<!-- Menu -->
			<nav id="menu">
				<h2>Menu</h2>
				<ul>
					<li><a href="{url action='viewMain'}">Home</a></li>
					<li><a href="{url action='viewProfil'}">Profil</a></li>
					<li><a href="{url action='viewCart'}">Koszyk</a></li>
					{if !$logedIn}
					<li><a href="{url action='viewLogin'}">Login</a></li>
					{/if}
					{if $admin}
					<li><a href="{url action='viewAddFilm'}">Dodaj Film</a></li> <!-- TODO: tylko dla admina -->
					{/if}
				</ul>
			</nav>


		{block name=content} Domyślna treść zawartości .... {/block}

		<!-- Footer -->
	<footer id="footer">
	<div class="inner">
		<section>
			<h2>Get in touch</h2>
			<form method="post" action="#">
				<div class="fields">
					<div class="field half">
						<input type="text" name="name" id="name" placeholder="Name" />
					</div>
					<div class="field half">
						<input type="email" name="email" id="email" placeholder="Email" />
					</div>
					<div class="field">
						<textarea name="message" id="message" placeholder="Message"></textarea>
					</div>
				</div>
				<ul class="actions">
					<li><input type="submit" value="Send" class="primary" /></li>
				</ul>
			</form>
		</section>
		<section>
			<h2>Follow</h2>
			<ul class="icons">
				<li><a href="#" class="icon brands style2 fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="#" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a></li>
				<li><a href="#" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
				<li><a href="#" class="icon brands style2 fa-dribbble"><span class="label">Dribbble</span></a></li>
				<li><a href="#" class="icon brands style2 fa-github"><span class="label">GitHub</span></a></li>
				<li><a href="#" class="icon brands style2 fa-500px"><span class="label">500px</span></a></li>
				<li><a href="#" class="icon solid style2 fa-phone"><span class="label">Phone</span></a></li>
				<li><a href="#" class="icon solid style2 fa-envelope"><span class="label">Email</span></a></li>
			</ul>
		</section>
		<ul class="copyright">
			<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
		</ul>
	</div>
</footer>
</div>

<!-- Scripts -->
<script src="{$conf->asset_root}/js/jquery.min.js"></script>
<script src="{$conf->asset_root}/js/browser.min.js"></script>
<script src="{$conf->asset_root}/js/breakpoints.min.js"></script>
<script src="{$conf->asset_root}/js/util.js"></script>
<script src="{$conf->asset_root}/js/main.js"></script>

</body>
</html>