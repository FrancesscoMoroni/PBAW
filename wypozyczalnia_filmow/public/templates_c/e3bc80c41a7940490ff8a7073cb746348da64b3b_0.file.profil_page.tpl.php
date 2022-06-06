<?php
/* Smarty version 4.1.0, created on 2022-06-06 17:24:29
  from 'E:\Programs\XAMPP\htdocs\wypozyczalnia_filmow\app\views\profil_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629e1c2d1f0203_11320820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3bc80c41a7940490ff8a7073cb746348da64b3b' => 
    array (
      0 => 'E:\\Programs\\XAMPP\\htdocs\\wypozyczalnia_filmow\\app\\views\\profil_page.tpl',
      1 => 1654529067,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:profile_page_table.tpl' => 1,
    'file:number_pagination.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_629e1c2d1f0203_11320820 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_321644616629e1c2d1e2378_75045667', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_321644616629e1c2d1e2378_75045667 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_321644616629e1c2d1e2378_75045667',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->asset_root;?>
/js/paginationNumbers.js"><?php echo '</script'; ?>
>

				<!-- Main -->
				<div id="main">
				<div class="inner">
					<header>
						<h1><?php echo (($tmp = $_smarty_tpl->tpl_vars['title']->value ?? null)===null||$tmp==='' ? "Nie ma tytułu" ?? null : $tmp);?>
</h1>
						<p><?php echo (($tmp = $_smarty_tpl->tpl_vars['description']->value ?? null)===null||$tmp==='' ? "Nie ma opisu" ?? null : $tmp);?>
</p>
						<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout" class="button">Wyloguj</a>
					</header>
				<section>
					<h2>Historia zamówień</h2>
					<?php if ((isset($_smarty_tpl->tpl_vars['rentalData']->value))) {?>
					<div class="table-wrapper">
						<table>
							<thead>
								<tr>
									<th>ID</th>
									<th>Data zmówienia</th>
									<th>Data oddania</th>
									<th>Cena</th>
								</tr>
							</thead>
							<tbody id="table">
								
									<?php $_smarty_tpl->_subTemplateRender("file:profile_page_table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
							</tbody>
						</table>
					</div>
					<?php }?>
					<?php $_smarty_tpl->_subTemplateRender("file:number_pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				</section>
				<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				</div>
				</div>

				<?php echo '<script'; ?>
>
					setPageNumber( <?php echo $_smarty_tpl->tpl_vars['pageNumber']->value;?>
 );
					setTableUrl( '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
viewTable' );
				<?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'content'} */
}
