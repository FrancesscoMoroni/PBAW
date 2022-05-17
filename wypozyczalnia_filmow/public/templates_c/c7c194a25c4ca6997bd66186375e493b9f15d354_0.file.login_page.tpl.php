<?php
/* Smarty version 4.1.0, created on 2022-05-17 08:30:27
  from 'C:\xampp\htdocs\wypozyczalnia_filmow\app\views\login_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628341037ab336_79630363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7c194a25c4ca6997bd66186375e493b9f15d354' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wypozyczalnia_filmow\\app\\views\\login_page.tpl',
      1 => 1652767954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628341037ab336_79630363 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30828692462834103488ce1_68764541', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_30828692462834103488ce1_68764541 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_30828692462834103488ce1_68764541',
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
	<form method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'login'),$_smarty_tpl ) );?>
">
		<div class="row gtr-uniform">
			<div class="col-4 col-12-xsmall">
				<input type="text" name="login" id="login" value="" placeholder="Login" />
			</div>
			<div class="col-6 col-12-xsmall"></div>
			<div class="col-4 col-12-xsmall">
				<input type="text" name="pass" id="pass" value="" placeholder="Password" />
			</div>
			<div class="col-12">
				<ul class="actions">
					<li><input type="submit" value="Zaloguj" class="primary" /></li>
					<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'viewRegister'),$_smarty_tpl ) );?>
" class="button">Zarejestruj</a></li>
				</ul>
			</div>
		</div>
	</form>
	</section>

	<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
		<div class="messages bottom-margin">
			<ul>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
			<li><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		</div>
	<?php }?>
	
</div>
</div>

<?php
}
}
/* {/block 'content'} */
}
