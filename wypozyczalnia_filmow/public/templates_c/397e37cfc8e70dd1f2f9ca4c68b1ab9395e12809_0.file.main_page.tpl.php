<?php
/* Smarty version 4.1.0, created on 2022-06-05 18:02:02
  from 'E:\Programs\XAMPP\htdocs\wypozyczalnia_filmow\app\views\main_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629cd37abcf0c9_75120950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '397e37cfc8e70dd1f2f9ca4c68b1ab9395e12809' => 
    array (
      0 => 'E:\\Programs\\XAMPP\\htdocs\\wypozyczalnia_filmow\\app\\views\\main_page.tpl',
      1 => 1654444915,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main_page_tiles.tpl' => 1,
  ),
),false)) {
function content_629cd37abcf0c9_75120950 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189094064629cd37abc3133_09537316', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_189094064629cd37abc3133_09537316 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_189094064629cd37abc3133_09537316',
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

					<!-- Search --> <!-- TODO: AJAX wyszukiwanie po nazwie + filtr -->
					<section>
					<form id="searchForm" onsubmit="ajaxSearch('searchForm','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
viewSearchMain','tiles', '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
viewMain'); return false;">
						<div class="row gtr-uniform">
							<div class="col-4 col-12-xsmall">
								<input type="text" name="searchName" id="searchName" value="" placeholder="Wpisz nazwę" />
							</div>
							<div class="col-2 col-12-xsmall">
								<select name="searchFiltr" id="searchFiltr">
										<option value="">Filtr</option>
										<option value="name_ASC">Nazwa ↑</option>
										<option value="name_DESC">Nazwa ↓</option>
										<option value="price_ASC">Cena ↑</option>
										<option value="price_DESC">Cena ↓</option>
								</select>
							</div>
							<div class="col-2 col-12-xsmall">
								<input type="submit" value="Szukaj" class="small primary" />
							</div>
						</div>
					</form>
					</section>

					<!-- Tiles -->
					<div id="tiles">
						<?php $_smarty_tpl->_subTemplateRender("file:main_page_tiles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
					</div>
				</div>
				</div>
				<?php echo '<script'; ?>
>
					ajaxPaginationScroll( '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
viewNextPageMain', 'tiles', <?php echo $_smarty_tpl->tpl_vars['pageNumber']->value;?>
 );
				<?php echo '</script'; ?>
>
				
				

				

<?php
}
}
/* {/block 'content'} */
}
