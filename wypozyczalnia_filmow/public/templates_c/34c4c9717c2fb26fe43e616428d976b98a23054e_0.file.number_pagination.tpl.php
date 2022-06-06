<?php
/* Smarty version 4.1.0, created on 2022-06-06 17:33:44
  from 'E:\Programs\XAMPP\htdocs\wypozyczalnia_filmow\app\views\number_pagination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629e1e587bcf96_89680249',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34c4c9717c2fb26fe43e616428d976b98a23054e' => 
    array (
      0 => 'E:\\Programs\\XAMPP\\htdocs\\wypozyczalnia_filmow\\app\\views\\number_pagination.tpl',
      1 => 1654529623,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629e1e587bcf96_89680249 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['pageNumber']->value != 0) {?>
    <span align="right">
        <div id="buttons">
            <button class="button small" onclick="ajaxPaginationToMostLeft( 'table' )"><<</button>
            <button class="button small" onclick="ajaxPaginationToLeft( 'table' )"><</button>
            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['pageNumber']->value+1+1 - (1) : 1-($_smarty_tpl->tpl_vars['pageNumber']->value+1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                <button class="button small" onclick="ajaxGetPage( <?php echo $_smarty_tpl->tpl_vars['i']->value-1;?>
, 'table' )"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</button>
            <?php }
}
?>
            <button class="button small" onclick="ajaxPaginationToRight( 'table' )">></button>
            <button class="button small" onclick="ajaxPaginationToMostRight( 'table' )">>></button>
        </div>
    </span>
<?php }
}
}
