<?php
/* Smarty version 4.1.0, created on 2022-06-05 15:35:14
  from 'E:\Programs\XAMPP\htdocs\wypozyczalnia_filmow\app\views\mainScroll_script.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629cb1127a2293_21542930',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf559abdb4517bd9225c96f18450447cea494683' => 
    array (
      0 => 'E:\\Programs\\XAMPP\\htdocs\\wypozyczalnia_filmow\\app\\views\\mainScroll_script.tpl',
      1 => 1654436113,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629cb1127a2293_21542930 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="tiles">
<!-- TODO: wyświetlanie w pętli odpowiedniej ilości obiektów -->	
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filmData']->value, 'film');
$_smarty_tpl->tpl_vars['film']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['film']->value) {
$_smarty_tpl->tpl_vars['film']->do_else = false;
?>
		<article><span class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->images_root;?>
/<?php echo $_smarty_tpl->tpl_vars['film']->value["film_img"];?>
.jpg" alt="" /></span><a href = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
viewFilm/<?php echo $_smarty_tpl->tpl_vars['film']->value["idfilms"];?>
"><!--<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
viewFilm/<?php echo $_smarty_tpl->tpl_vars['film']->value["idfilms"];?>
--><div class="content"><?php echo $_smarty_tpl->tpl_vars['film']->value["name"];?>
<br><?php echo $_smarty_tpl->tpl_vars['film']->value["price"];?>
 zł</div></a></article>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>							
</section>
<br>
<div id="nextPage">

<?php echo '<script'; ?>
>
	ajaxPaginationScroll( '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
viewNextPageMain', 'nextPage', <?php echo $_smarty_tpl->tpl_vars['pageNumber']->value;?>
 );
<?php echo '</script'; ?>
>
</div><?php }
}
