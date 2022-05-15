<?php
/* Smarty version 4.1.0, created on 2022-05-10 09:02:51
  from 'C:\xampp\htdocs\wypozyczalnia_filmow\app\views\cart_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_627a0e1b7baf03_65017742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5eb344187f534006f9e3a976acb947c12e1b30c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wypozyczalnia_filmow\\app\\views\\cart_page.tpl',
      1 => 1652164882,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627a0e1b7baf03_65017742 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_694970201627a0e1b7ad9c1_04957181', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_694970201627a0e1b7ad9c1_04957181 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_694970201627a0e1b7ad9c1_04957181',
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

	<section>
		<h2>Table</h2>
		<h3>Default</h3>
		<div class="table-wrapper">
			<table>
				<thead>
					<tr>
						<th>Name</th>
						<th>Description</th>
						<th></th>
						<th>Price</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<!-- TODO: tworzenie w pętli -->
					<tr>
						<td>Item One</td>
						<td>Ante turpis integer aliquet porttitor.</td>
						<td></td>
						<td>29.99</td>
						<td> 
							<ul class="actions">
								<li><a href="#" class="button primary fit small">X</a></li>
							</ul>
						</td>
					</tr>
					<!---->
					<tr>
						<td>Item two</td>
						<td>Ante turpis integer aliquet porttitor.</td>
						<td></td>
						<td>29.99</td>
						<td> 
							<ul class="actions">
								<li><a href="#" class="button primary fit small">X</a></li>
							</ul>
						</td>
					</tr>

					<tr>
						<td>Item Three</td>
						<td>Ante turpis integer aliquet porttitor.</td>
						<td></td>
						<td>29.99</td>
						<td> 
							<ul class="actions">
								<li><a href="#" class="button primary fit small">X</a></li>
							</ul>
						</td>
					</tr>

				</tbody>
				<tfoot>
					<tr>
						<td colspan="2"></td>
						<td>Koszt</td>
						<td>100</td>
						
					</tr>
					<tr>
						<td colspan="3"></td>
						<td>
							<ul class="actions">
								<li><a href="#" class="button fit small">Wypożyczam</a></li>
							</ul>
						</td>
					</tr>
				</tfoot>
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
