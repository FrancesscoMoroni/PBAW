<?php
/* Smarty version 4.1.0, created on 2022-05-13 17:22:56
  from 'E:\Programs\XAMPP\htdocs\wypozyczalnia_filmow\app\views\cart_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_627e77d0c1eb41_67470875',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30b0fb98aff6de98b4874b6ba669be918d6567f3' => 
    array (
      0 => 'E:\\Programs\\XAMPP\\htdocs\\wypozyczalnia_filmow\\app\\views\\cart_page.tpl',
      1 => 1652455055,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627e77d0c1eb41_67470875 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_188594456627e77d0c15b85_99125062', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_188594456627e77d0c15b85_99125062 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_188594456627e77d0c15b85_99125062',
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
