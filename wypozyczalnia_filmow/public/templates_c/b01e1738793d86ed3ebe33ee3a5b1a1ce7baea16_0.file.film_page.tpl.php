<?php
/* Smarty version 4.1.0, created on 2022-06-06 18:14:38
  from 'E:\Programs\XAMPP\htdocs\wypozyczalnia_filmow\app\views\film_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629e27eeb3a094_20445440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b01e1738793d86ed3ebe33ee3a5b1a1ce7baea16' => 
    array (
      0 => 'E:\\Programs\\XAMPP\\htdocs\\wypozyczalnia_filmow\\app\\views\\film_page.tpl',
      1 => 1654532072,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_629e27eeb3a094_20445440 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1883474838629e27eeb27943_40680846', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1883474838629e27eeb27943_40680846 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1883474838629e27eeb27943_40680846',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


				<!-- Main -->
				<div id="main">
				<div class="inner">
					<header>
						<h1><?php echo (($tmp = $_smarty_tpl->tpl_vars['filmData']->value[0]["name"] ?? null)===null||$tmp==='' ? "Nie ma tytułu" ?? null : $tmp);?>
</h1>
						<?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
						<p><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
viewEditFilm/<?php echo $_smarty_tpl->tpl_vars['filmData']->value[0]["idfilms"];?>
" class="button">Edytuj</a></p> <!-- TODO: edytowanie filmu tylko dla administratorów -->
						<?php }?>
					</header>
				<span class="image page"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->images_root;?>
/<?php echo $_smarty_tpl->tpl_vars['filmData']->value[0]["film_img"];?>
.jpg" alt="" /></span><br>
				<h4><?php echo $_smarty_tpl->tpl_vars['directorData']->value[0]["name"];?>
 <?php echo $_smarty_tpl->tpl_vars['directorData']->value[0]["surname"];?>
</h4>
				<h4><?php echo (($tmp = $_smarty_tpl->tpl_vars['filmData']->value[0]["movie_genre"] ?? null)===null||$tmp==='' ? "Gatunek" ?? null : $tmp);?>
</h4>
				<h4><?php echo (($tmp = $_smarty_tpl->tpl_vars['filmData']->value[0]["release_date"] ?? null)===null||$tmp==='' ? "Data wydania" ?? null : $tmp);?>
</h4>
				<p><?php echo (($tmp = $_smarty_tpl->tpl_vars['filmData']->value[0]["description"] ?? null)===null||$tmp==='' ? "Nie ma jeszcze opisu filmu" ?? null : $tmp);?>
</p>
				<h2><?php echo (($tmp = $_smarty_tpl->tpl_vars['filmData']->value[0]["rating"] ?? null)===null||$tmp==='' ? "0" ?? null : $tmp);?>
 / 10</h2>
				<h2><?php echo (($tmp = $_smarty_tpl->tpl_vars['filmData']->value[0]["price"] ?? null)===null||$tmp==='' ? "0" ?? null : $tmp);?>
 zł</h2>

				<button onclick="ajaxPostAndReload('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
addFilmToCart/<?php echo $_smarty_tpl->tpl_vars['filmData']->value[0]['idfilms'];?>
', 'messages')">Dodaj do koszyka</button>		

				<div id="messages">
					<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				</div>

				</div>
				</div>

<?php
}
}
/* {/block 'content'} */
}
