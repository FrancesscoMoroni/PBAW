<?php
/* Smarty version 4.1.0, created on 2022-06-06 15:13:34
  from 'E:\Programs\XAMPP\htdocs\wypozyczalnia_filmow\app\views\login_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629dfd7e876208_49117350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b695b69515534d472fb2ff18c0d9645dfe6a0c3' => 
    array (
      0 => 'E:\\Programs\\XAMPP\\htdocs\\wypozyczalnia_filmow\\app\\views\\login_page.tpl',
      1 => 1654521203,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_629dfd7e876208_49117350 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1772558459629dfd7e6cacd3_32785768', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1772558459629dfd7e6cacd3_32785768 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1772558459629dfd7e6cacd3_32785768',
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
	<form id="loginForm" onsubmit="ajaxPostFormRedirect('loginForm','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login','error','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
viewMain'); return false;">
		<div class="row gtr-uniform">
			<div class="col-4 col-12-xsmall">
				<input type="text" name="login" id="login" value="" placeholder="Login" />
			</div>
			<div class="col-6 col-12-xsmall"></div>
			<div class="col-4 col-12-xsmall">
				<input type="password" name="pass" id="pass" value="" placeholder="Password" />
			</div>
			<div class="col-12">
				<ul class="actions">
					<li><input type="submit" value="Zaloguj" class="primary" /></li>
					<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'viewRegister'),$_smarty_tpl ) );?>
" class="button">Zarejestruj</a></li>
				</ul>
			</div>
			<!-- TODO: AJAX, zapisywanie + wyświetlanie errorów -->
		</div>
	</form>
	</section>

	<div id = "error">
		<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</div>
	
	
</div>
</div>

<?php
}
}
/* {/block 'content'} */
}
