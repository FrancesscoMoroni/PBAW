<?php
/* Smarty version 3.1.30, created on 2022-04-12 13:00:22
  from "E:\Programs\XAMPP\htdocs\php_kalkulator_rat\app\views\HistoryView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_62555bc672ff00_69466742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '383ad31c702332ff3e0d8a97bd6cf0e1a5d76ec9' => 
    array (
      0 => 'E:\\Programs\\XAMPP\\htdocs\\php_kalkulator_rat\\app\\views\\HistoryView.tpl',
      1 => 1649761219,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_62555bc672ff00_69466742 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210098807662555bc672f091_19948284', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_210098807662555bc672f091_19948284 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcShow"  class="pure-menu-heading pure-menu-link">kalkulator</a>
	<span style="float:right;">użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</span>
</div>

<table class="pure-table pure-table-bordered">
<thead>
  <tr>
    <th>ID</th>
    <th>loan</th>
    <th>installment</th>
    <th>interest</th>
    <th>inAmount</th>
    <th>result</th>
  </tr>
</thead>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['db']->value, 'd');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
?>
<tbody><tr><td><?php echo $_smarty_tpl->tpl_vars['d']->value["ID"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['d']->value["loan"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['d']->value["installment"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['d']->value["interest"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['d']->value["inAmount"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['d']->value["result"];?>
</td></tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</tbody>
</table>



<?php
}
}
/* {/block 'content'} */
}
