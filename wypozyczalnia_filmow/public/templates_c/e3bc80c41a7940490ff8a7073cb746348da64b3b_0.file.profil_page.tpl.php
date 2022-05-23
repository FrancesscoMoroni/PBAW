<?php
/* Smarty version 4.1.0, created on 2022-05-23 18:31:24
  from 'E:\Programs\XAMPP\htdocs\wypozyczalnia_filmow\app\views\profil_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628bb6dca98f80_88471824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3bc80c41a7940490ff8a7073cb746348da64b3b' => 
    array (
      0 => 'E:\\Programs\\XAMPP\\htdocs\\wypozyczalnia_filmow\\app\\views\\profil_page.tpl',
      1 => 1653323483,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628bb6dca98f80_88471824 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1061646401628bb6dca8b0d8_09421887', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1061646401628bb6dca8b0d8_09421887 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1061646401628bb6dca8b0d8_09421887',
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
					<?php if ((isset($_smarty_tpl->tpl_vars['rentalData']->value))) {?>
					<div class="table-wrapper">
						<table>
							<thead>
								<tr>
									<th>ID</th>
									<th>Data zmówienia</th>
									<th>Data oddania</th>
									<th>Koszt</th>
								</tr>
							</thead>
							<tbody>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rentalData']->value, 'rD');
$_smarty_tpl->tpl_vars['rD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rD']->value) {
$_smarty_tpl->tpl_vars['rD']->do_else = false;
?>
								<tr>
									<td><?php echo $_smarty_tpl->tpl_vars['rD']->value["idmovie_rental"];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['rD']->value["rental_date"];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['rD']->value["return_date"];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['rD']->value["un_price"];?>
</td>
								</tr>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</tbody>
						</table>
					</div>
					<?php }?>
				</section>

				<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
					<div class="messages bottom-margin">
						<ul>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
						<li><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ul>
					</div>
				<?php }?>
				</div>
				</div>

<?php
}
}
/* {/block 'content'} */
}
