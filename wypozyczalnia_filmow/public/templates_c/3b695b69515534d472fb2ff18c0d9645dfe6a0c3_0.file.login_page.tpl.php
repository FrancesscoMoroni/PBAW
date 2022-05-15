<?php
/* Smarty version 4.1.0, created on 2022-05-07 20:48:33
  from 'E:\Programs\XAMPP\htdocs\wypozyczalnia_filmow\app\views\login_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6276bf01ed5691_69046416',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b695b69515534d472fb2ff18c0d9645dfe6a0c3' => 
    array (
      0 => 'E:\\Programs\\XAMPP\\htdocs\\wypozyczalnia_filmow\\app\\views\\login_page.tpl',
      1 => 1651949311,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6276bf01ed5691_69046416 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17686784616276bf01ecc981_25529174', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_17686784616276bf01ecc981_25529174 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17686784616276bf01ecc981_25529174',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<!-- Main -->
<div id="main">
<div class="inner">
	<header>
		<h1><?php echo (($tmp = $_smarty_tpl->tpl_vars['title']->value ?? null)===null||$tmp==='' ? "Nie ma tytułu" ?? null : $tmp);?>
</h1>
		<p><?php echo (($tmp = $_smarty_tpl->tpl_vars['description']->value ?? null)===null||$tmp==='' ? "Nie ma opisu" ?? null : $tmp);?>
</p>
	</header>

	<!-- Form -->
	<section>
	<form method="post" action="#">
		<div class="row gtr-uniform">
			<div class="col-4 col-12-xsmall">
				<input type="text" name="demo-name" id="demo-name" value="" placeholder="Login" />
			</div>
			<div class="col-6 col-12-xsmall"></div>
			<div class="col-4 col-12-xsmall">
				<input type="text" name="demo-name" id="demo-name" value="" placeholder="Password" />
			</div>
			<div class="col-12">
				<ul class="actions">
					<li><input type="submit" value="Zaloguj" class="primary" /></li>
					<!-- <li><input type="submit" value="Zarejestruj" /></li> -->
					<li><a href="#" class="button">Zarejestruj</a></li>
				</ul>
			</div>
		</div>
	</form>
	</section>
	
</div>
</div>

<?php
}
}
/* {/block 'content'} */
}
