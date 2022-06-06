<?php
/* Smarty version 4.1.0, created on 2022-06-06 17:21:23
  from 'E:\Programs\XAMPP\htdocs\wypozyczalnia_filmow\app\views\profile_page_table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629e1b73e121f6_57281871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11a20a9c7607fe94d9bca3673081a75020b0f9c2' => 
    array (
      0 => 'E:\\Programs\\XAMPP\\htdocs\\wypozyczalnia_filmow\\app\\views\\profile_page_table.tpl',
      1 => 1654528882,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629e1b73e121f6_57281871 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rentalData']->value, 'rD');
$_smarty_tpl->tpl_vars['rD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rD']->value) {
$_smarty_tpl->tpl_vars['rD']->do_else = false;
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['rD']->value["idmovie_rental"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['rD']->value["rental_date"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['rD']->value["return_date"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['rD']->value["un_price"];?>
</td></tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
