<?php
/* Smarty version 4.1.0, created on 2022-06-05 16:20:05
  from 'E:\Programs\XAMPP\htdocs\wypozyczalnia_filmow\app\views\main_page_tiles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629cbb95bbb7f7_82146009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57f11897cbd9f87cbffa41db275c1f83c966899e' => 
    array (
      0 => 'E:\\Programs\\XAMPP\\htdocs\\wypozyczalnia_filmow\\app\\views\\main_page_tiles.tpl',
      1 => 1654438763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629cbb95bbb7f7_82146009 (Smarty_Internal_Template $_smarty_tpl) {
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
<div id="pageNumber" style="display: none;"><?php echo $_smarty_tpl->tpl_vars['pageNumber']->value;?>
</div><?php }
}
