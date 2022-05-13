<?php
/* Smarty version 4.1.0, created on 2022-05-10 10:08:56
  from 'C:\xampp\htdocs\wypozyczalnia_filmow\app\views\film_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_627a1d98ab2a81_38000100',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82e1258395ae439b0677c4655e5109ef10264cee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wypozyczalnia_filmow\\app\\views\\film_page.tpl',
      1 => 1652170132,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627a1d98ab2a81_38000100 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1726184036627a1d98a90463_06231846', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1726184036627a1d98a90463_06231846 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1726184036627a1d98a90463_06231846',
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
						<p><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'viewEditFilm'),$_smarty_tpl ) );?>
" class="button">Edytuj</a></p> <!-- TODO: edytowanie filmu tylko dla administratorów -->
					</header>
				
				<span class="image page"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->images_root;?>
/Jojo_Rabbit.jpg" alt="" /></span><br>
				<h4><?php echo (($tmp = $_smarty_tpl->tpl_vars['filmDirector']->value ?? null)===null||$tmp==='' ? "Imię Nazwisko" ?? null : $tmp);?>
</h4>
				<h4><?php echo (($tmp = $_smarty_tpl->tpl_vars['filmGenre']->value ?? null)===null||$tmp==='' ? "Gatunek" ?? null : $tmp);?>
</h4>
				<h4><?php echo (($tmp = $_smarty_tpl->tpl_vars['filmDate']->value ?? null)===null||$tmp==='' ? "Data wydania" ?? null : $tmp);?>
</h4>
				<p><?php echo (($tmp = $_smarty_tpl->tpl_vars['filmDescription']->value ?? null)===null||$tmp==='' ? "Nie ma jeszcze opisu filmu" ?? null : $tmp);?>
</p>
				<h2><?php echo (($tmp = $_smarty_tpl->tpl_vars['filmRating']->value ?? null)===null||$tmp==='' ? "0" ?? null : $tmp);?>
 / 10</h2>
				<h2><?php echo (($tmp = $_smarty_tpl->tpl_vars['filmPrice']->value ?? null)===null||$tmp==='' ? "0" ?? null : $tmp);?>
 zł</h2>
				<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'addFilm'),$_smarty_tpl ) );?>
" class="button">Dodaj do koszyka</a>
						
					
				</div>
				</div>

<?php
}
}
/* {/block 'content'} */
}
