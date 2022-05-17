<?php
/* Smarty version 4.1.0, created on 2022-05-17 08:15:19
  from 'C:\xampp\htdocs\wypozyczalnia_filmow\app\views\main_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62833d77b1c291_23974058',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '119a380b94eb3ddc5508e69703244e887b0c490a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wypozyczalnia_filmow\\app\\views\\main_page.tpl',
      1 => 1652767954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62833d77b1c291_23974058 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18478790262833d779063e8_41518150', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_18478790262833d779063e8_41518150 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18478790262833d779063e8_41518150',
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

					<!-- Tiles -->
					
					<section class="tiles">
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
</div></a></article>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							
					</section>
				</div>
				</div>

<?php
}
}
/* {/block 'content'} */
}
