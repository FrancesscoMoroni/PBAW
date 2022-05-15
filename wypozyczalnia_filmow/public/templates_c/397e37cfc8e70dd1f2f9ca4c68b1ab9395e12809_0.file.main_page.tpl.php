<?php
/* Smarty version 4.1.0, created on 2022-05-14 16:19:45
  from 'E:\Programs\XAMPP\htdocs\wypozyczalnia_filmow\app\views\main_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_627fba81581352_65621370',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '397e37cfc8e70dd1f2f9ca4c68b1ab9395e12809' => 
    array (
      0 => 'E:\\Programs\\XAMPP\\htdocs\\wypozyczalnia_filmow\\app\\views\\main_page.tpl',
      1 => 1652537981,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627fba81581352_65621370 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_741026097627fba81569f58_47512745', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_741026097627fba81569f58_47512745 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_741026097627fba81569f58_47512745',
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
