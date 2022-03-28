<?php
/* Smarty version 4.1.0, created on 2022-03-28 20:39:03
  from 'E:\Programs\XAMPP\htdocs\php_kalkulator_rat\app\calc_class\calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624200c73a0637_17009677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24f3de7ad1b6de45888c61ac619192e1f3ed02ad' => 
    array (
      0 => 'E:\\Programs\\XAMPP\\htdocs\\php_kalkulator_rat\\app\\calc_class\\calc.tpl',
      1 => 1648490422,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624200c73a0637_17009677 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_804543628624200c7395e45_40458546', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1192954908624200c73965d1_30486396', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.tpl"));
}
/* {block 'footer'} */
class Block_804543628624200c7395e45_40458546 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_804543628624200c7395e45_40458546',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Mam nadzieję że wszystko zadziałało poprawnie<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1192954908624200c73965d1_30486396 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1192954908624200c73965d1_30486396',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2 class="content-head is-center">Prosty kalkulator</h2>

<div class="pure-g">
<div class="l-box-lrg pure-u-1 pure-u-med-1-3">
	<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
		<fieldset>
			<label for="id_loan">Wysokość kredytu: </label>
			<input id="id_loan" type="text" placeholder="wysokość kredytu" name="loan" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->loan;?>
" />

			<label for="id_interest">Oprocentowanie w skali roku: </label>
			<input id="id_interest" type="text" placeholder="oprocentowanie" name="interest" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->interest;?>
" />

			<label for="id_installment">Ilość rat w ciągu roku: </label>
			<input id="id_installment" type="text" placeholder="ilość rat w ciągu roku" name="installment" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->installment;?>
" />

			<label for="id_inAmount">Ilość rat: </label>
			<input id="id_inAmount" type="text" placeholder="ilość rat" name="inAmount" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->inAmount;?>
" />

			<button type="submit" class="pure-button">Oblicz</button>
		</fieldset>
	</form>
</div>

<div class="l-box-lrg pure-u-1 pure-u-med-3-5">

		<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
		<h4>Informacje: </h4>
		<ol class="inf">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }?>

	<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
		<h4>Wynik</h4>
		<p class="res">
		<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

		</p>
	<?php }?>

</div>

</div>

<?php
}
}
/* {/block 'content'} */
}