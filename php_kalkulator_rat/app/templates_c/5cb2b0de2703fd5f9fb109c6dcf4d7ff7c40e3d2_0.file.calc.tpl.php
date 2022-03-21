<?php
/* Smarty version 4.1.0, created on 2022-03-21 21:07:39
  from 'E:\Programs\XAMPP\htdocs\php_kalkulator_rat\app\calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6238db0be1f4d0_13709628',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5cb2b0de2703fd5f9fb109c6dcf4d7ff7c40e3d2' => 
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
function content_6238db0be1f4d0_13709628 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20714446086238db0be15106_44691178', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9585822466238db0be15915_42155282', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'footer'} */
class Block_20714446086238db0be15106_44691178 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_20714446086238db0be15106_44691178',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Mam nadzieję że wszystko zadziałało poprawnie<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_9585822466238db0be15915_42155282 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9585822466238db0be15915_42155282',
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
