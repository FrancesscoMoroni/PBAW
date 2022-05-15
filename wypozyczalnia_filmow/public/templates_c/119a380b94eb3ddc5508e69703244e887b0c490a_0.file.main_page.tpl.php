<?php
/* Smarty version 4.1.0, created on 2022-05-10 09:20:43
  from 'C:\xampp\htdocs\wypozyczalnia_filmow\app\views\main_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_627a124b8d9cd5_96739378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '119a380b94eb3ddc5508e69703244e887b0c490a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wypozyczalnia_filmow\\app\\views\\main_page.tpl',
      1 => 1652167234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627a124b8d9cd5_96739378 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1268669300627a124b86fc60_41334933', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1268669300627a124b86fc60_41334933 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1268669300627a124b86fc60_41334933',
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
						<article>
							<span class="image">
								<img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->images_root;?>
/Jojo_Rabbit.jpg" alt="" />
							</span>
							<a href = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'viewFilm'),$_smarty_tpl ) );?>
">
								<h2><?php echo (($tmp = $_smarty_tpl->tpl_vars['film_title']->value ?? null)===null||$tmp==='' ? "Nie ma tytułu filmu" ?? null : $tmp);?>
</h2>
								<div class="content">
									<p><?php echo (($tmp = $_smarty_tpl->tpl_vars['film_description']->value ?? null)===null||$tmp==='' ? "Nie ma opisu filmu sadsad  asdsad dsadsa" ?? null : $tmp);?>
</p>
								</div>
							</a>
						</article>
						
						
						<article>
							<span class="image">
								<img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->images_root;?>
/Avengers_Endgame.jpg" alt="" />
							</span>
							<a>
								<h2><?php echo (($tmp = $_smarty_tpl->tpl_vars['film_title']->value ?? null)===null||$tmp==='' ? "Nie ma tytułu filmu" ?? null : $tmp);?>
</h2>
								<div class="content">
									<p><?php echo (($tmp = $_smarty_tpl->tpl_vars['film_description']->value ?? null)===null||$tmp==='' ? "Nie ma opisu filmu" ?? null : $tmp);?>
</p>
								</div>
								
							</a>
						</article>

						<article>
							<span class="image">
								<img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->images_root;?>
/Sherlock_Holmes.jpg" alt="" />
							</span>
							<a>
								<h2><?php echo (($tmp = $_smarty_tpl->tpl_vars['film_title']->value ?? null)===null||$tmp==='' ? "Nie ma tytułu filmu" ?? null : $tmp);?>
</h2>
								<div class="content">
									<p><?php echo (($tmp = $_smarty_tpl->tpl_vars['film_description']->value ?? null)===null||$tmp==='' ? "Nie ma opisu filmu" ?? null : $tmp);?>
</p>
								</div>						
							</a>
						</article>

						<article>
							<span class="image">
								<img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->images_root;?>
/Harry_Potter.jpg" alt="" />
							</span>
							<a>
								<h2><?php echo (($tmp = $_smarty_tpl->tpl_vars['film_title']->value ?? null)===null||$tmp==='' ? "Nie ma tytułu filmu" ?? null : $tmp);?>
</h2>
								<div class="content">
									<p><?php echo (($tmp = $_smarty_tpl->tpl_vars['film_description']->value ?? null)===null||$tmp==='' ? "Nie ma opisu filmu" ?? null : $tmp);?>
</p>
								</div>
							</a>
						</article>
						
					</section>
				</div>
				</div>

<?php
}
}
/* {/block 'content'} */
}
