<?php
/* Smarty version 4.1.0, created on 2022-05-17 08:48:16
  from 'C:\xampp\htdocs\wypozyczalnia_filmow\app\views\profil_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62834530340740_70308076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85dd166c444b9ffa537006850db39a74f5d69c68' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wypozyczalnia_filmow\\app\\views\\profil_page.tpl',
      1 => 1652768488,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62834530340740_70308076 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59153655362834530330a02_92579100', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_59153655362834530330a02_92579100 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_59153655362834530330a02_92579100',
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
						<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout" class="button">Wyloguj</a>
					</header>
				<section>
					<h2>Historia zamówień</h2>
					<div class="table-wrapper">
						<table>
							<thead>
								<tr>
									<th>ID</th>
									<th>Ilość</th>
									<th>Cena</th>
								</tr>
							</thead>
							<tbody>
								<!-- TODO: tworzenie w pętli -->
								<tr>
									<td>12354243</td>
									<td>3</td>
									<td>24.32</td>
								</tr>
								<!---->

							</tbody>
						</table>
					</div>
				</section>
				</div>
				</div>

<?php
}
}
/* {/block 'content'} */
}
