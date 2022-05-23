<?php
/* Smarty version 4.1.0, created on 2022-05-23 17:30:03
  from 'E:\Programs\XAMPP\htdocs\wypozyczalnia_filmow\app\views\cart_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628ba87b00e1a1_79699478',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30b0fb98aff6de98b4874b6ba669be918d6567f3' => 
    array (
      0 => 'E:\\Programs\\XAMPP\\htdocs\\wypozyczalnia_filmow\\app\\views\\cart_page.tpl',
      1 => 1653318558,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628ba87b00e1a1_79699478 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141445705628ba87af3f201_36461122', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_141445705628ba87af3f201_36461122 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_141445705628ba87af3f201_36461122',
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

	<?php if ((isset($_smarty_tpl->tpl_vars['cartData']->value))) {?>
	<section><div class="table-wrapper"><table><thead><tr><th>ID</th><th>Name</th><th></th><th>Price</th><th></th></tr></thead><tbody><?php $_smarty_tpl->_assignInScope('i', 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cartData']->value, 'cD');
$_smarty_tpl->tpl_vars['cD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cD']->value) {
$_smarty_tpl->tpl_vars['cD']->do_else = false;
?><tr><td><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['cD']->value["name"];?>
</td><td></td><td><?php echo $_smarty_tpl->tpl_vars['cD']->value["price"];?>
</td><td><ul class="actions"><li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
deleteItem/<?php echo $_smarty_tpl->tpl_vars['cD']->value["idfilms"];?>
" class="button primary fit small">X</a></li></ul></td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody><tfoot><tr><td colspan="2"></td><td>Koszt</td><td><?php echo (($tmp = $_smarty_tpl->tpl_vars['sumPrice']->value ?? null)===null||$tmp==='' ? " " ?? null : $tmp);?>
</td></tr><tr><td colspan="3"></td><td><ul class="actions"><li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
rentFilms" class="button fit small">Wypożyczam</a></li></ul></td></tr></tfoot></table></div></section>
	<?php }?>					

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
