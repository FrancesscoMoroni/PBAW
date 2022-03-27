<?php
/* Smarty version 4.1.0, created on 2022-03-21 21:15:45
  from 'E:\Programs\XAMPP\htdocs\php_kalkulator_rat\app\calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6238dcf1a7c0a3_28485336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6569b8e0311a6f50b6c5b2857796ca899b0d2dc0' => 
    array (
      0 => 'E:\\Programs\\XAMPP\\htdocs\\php_kalkulator_rat\\app\\calc.tpl',
      1 => 1647893241,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6238dcf1a7c0a3_28485336 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7297257466238dcf1a713d0_71245663', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7683454066238dcf1a71bb9_30232428', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'footer'} */
class Block_7297257466238dcf1a713d0_71245663 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_7297257466238dcf1a713d0_71245663',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Mam nadzieję że wszystko zadziałało poprawnie<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_7683454066238dcf1a71bb9_30232428 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7683454066238dcf1a71bb9_30232428',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2 class="content-head is-center">Prosty kalkulator</h2>

<div class="pure-g">
<div class="l-box-lrg pure-u-1 pure-u-med-1-3">
	<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
		<fieldset>
			<label for="id_loan">Wysokość kredytu: </label>
			<input id="id_loan" type="text" placeholder="wysokość kredytu" name="loan" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['loan'];?>
" />

			<label for="id_interest">Oprocentowanie w skali roku: </label>
			<input id="id_interest" type="text" placeholder="oprocentowanie" name="interest" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['interest'];?>
" />

			<label for="id_installment">Ilość rat w ciągu roku: </label>
			<input id="id_installment" type="text" placeholder="ilość rat w ciągu roku" name="installment" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['installment'];?>
" />

			<label for="id_inAmount">Ilość rat: </label>
			<input id="id_inAmount" type="text" placeholder="ilość rat" name="inAmount" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['inAmount'];?>
" />

			<button type="submit" class="pure-button">Oblicz</button>
		</fieldset>
	</form>
</div>

<div class="l-box-lrg pure-u-1 pure-u-med-3-5">

<?php if (((isset($_smarty_tpl->tpl_vars['messages']->value)))) {?> 
	<?php if ((count($_smarty_tpl->tpl_vars['messages']->value) > 0)) {?> 
	    <h4>Wystąpiły błędy: </h4>
	    <ol class="err">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>	
		</ol>
    <?php }
}?>

<?php if (((isset($_smarty_tpl->tpl_vars['result']->value)))) {?>
	<h4>Wynik</h4>
	<p class="res">
    <?php echo $_smarty_tpl->tpl_vars['result']->value;?>

	</p>
<?php }?>

</div>

</div>

<?php
}
}
/* {/block 'content'} */
}
