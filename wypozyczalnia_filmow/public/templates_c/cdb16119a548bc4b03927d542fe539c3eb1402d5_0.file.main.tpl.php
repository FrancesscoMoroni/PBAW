<?php
/* Smarty version 4.1.0, created on 2022-06-06 15:37:37
  from 'E:\Programs\XAMPP\htdocs\wypozyczalnia_filmow\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629e032158b902_49249309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdb16119a548bc4b03927d542fe539c3eb1402d5' => 
    array (
      0 => 'E:\\Programs\\XAMPP\\htdocs\\wypozyczalnia_filmow\\app\\views\\templates\\main.tpl',
      1 => 1654522656,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629e032158b902_49249309 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo (($tmp = $_smarty_tpl->tpl_vars['title']->value ?? null)===null||$tmp==='' ? "brak tytułu" ?? null : $tmp);?>
</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->asset_root;?>
/css/main.css" />
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->asset_root;?>
/js/functions.js"><?php echo '</script'; ?>
>
		<noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->asset_root;?>
/css/noscript.css" /></noscript>
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
					<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'viewMain'),$_smarty_tpl ) );?>
">Home</a></li>
					<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'viewProfil'),$_smarty_tpl ) );?>
">Profil</a></li>
					<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'viewCart'),$_smarty_tpl ) );?>
">Koszyk</a></li>
					<?php if (!$_smarty_tpl->tpl_vars['logedIn']->value) {?>
					<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'viewLogin'),$_smarty_tpl ) );?>
">Login</a></li>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
					<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'viewAddFilm'),$_smarty_tpl ) );?>
">Dodaj Film</a></li> <!-- TODO: tylko dla admina -->
					<?php }?>
				</ul>
			</nav>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_412444261629e0321589a55_43943362', 'content');
?>


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
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->asset_root;?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->asset_root;?>
/js/browser.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->asset_root;?>
/js/breakpoints.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->asset_root;?>
/js/util.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->asset_root;?>
/js/main.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
/* {block 'content'} */
class Block_412444261629e0321589a55_43943362 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_412444261629e0321589a55_43943362',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
