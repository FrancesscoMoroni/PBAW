<?php
/* Smarty version 3.1.30, created on 2022-04-11 20:16:14
  from "E:\Programs\XAMPP\htdocs\php_07_routing\app\views\CalcView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6254706ed025d9_21283306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb48421c541cbb04fb9b057b17a575a6de7549cc' => 
    array (
      0 => 'E:\\Programs\\XAMPP\\htdocs\\php_07_routing\\app\\views\\CalcView.tpl',
      1 => 1649700970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6254706ed025d9_21283306 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14005581156254706ed01bb8_60540633', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_14005581156254706ed01bb8_60540633 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
	<span style="float:right;">użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</span>
</div>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcCompute" method="post" class="pure-form pure-form-aligned bottom-margin">
	<legend>Kalkulator</legend>
	<fieldset>
			<label for="id_loan">Wysokość kredytu: </label>
			<input id="id_loan" type="text" placeholder="wysokość kredytu" name="loan" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->loan;?>
" /><br><br>

			<label for="id_interest">Oprocentowanie w skali roku: </label>
			<input id="id_interest" type="text" placeholder="oprocentowanie" name="interest" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->interest;?>
" /><br><br>

			<label for="id_installment">Ilość rat w ciągu roku: </label>
			<input id="id_installment" type="text" placeholder="ilość rat w ciągu roku" name="installment" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->installment;?>
" /><br><br>

			<label for="id_inAmount">Ilość rat: </label>
			<input id="id_inAmount" type="text" placeholder="ilość rat" name="inAmount" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->inAmount;?>
" /><br><br>

			<button type="submit" class="pure-button">Oblicz</button>
	</fieldset>
</form>	

<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
<div class="messages info">
	Wynik: <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

</div>
<?php }?>

<?php
}
}
/* {/block 'content'} */
}
