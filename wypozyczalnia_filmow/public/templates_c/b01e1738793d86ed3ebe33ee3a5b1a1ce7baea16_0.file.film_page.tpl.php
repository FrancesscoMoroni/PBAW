<?php
/* Smarty version 4.1.0, created on 2022-05-14 16:44:21
  from 'E:\Programs\XAMPP\htdocs\wypozyczalnia_filmow\app\views\film_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_627fc045b24817_39116437',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b01e1738793d86ed3ebe33ee3a5b1a1ce7baea16' => 
    array (
      0 => 'E:\\Programs\\XAMPP\\htdocs\\wypozyczalnia_filmow\\app\\views\\film_page.tpl',
      1 => 1652539362,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627fc045b24817_39116437 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_493661929627fc045af91c4_75290720', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_493661929627fc045af91c4_75290720 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_493661929627fc045af91c4_75290720',
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
						<p><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'viewEditFilm'),$_smarty_tpl ) );?>
" class="button">Edytuj</a></p> <!-- TODO: edytowanie filmu tylko dla administratorów -->
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
				<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'addFilm'),$_smarty_tpl ) );?>
" class="button">Dodaj do koszyka</a>
						
					
				</div>
				</div>

<?php
}
}
/* {/block 'content'} */
}
