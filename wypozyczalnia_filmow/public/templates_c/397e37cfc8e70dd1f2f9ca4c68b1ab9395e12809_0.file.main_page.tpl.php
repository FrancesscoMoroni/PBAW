<?php
/* Smarty version 4.1.0, created on 2022-05-07 20:35:32
  from 'E:\Programs\XAMPP\htdocs\wypozyczalnia_filmow\app\views\main_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6276bbf480e754_36905012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '397e37cfc8e70dd1f2f9ca4c68b1ab9395e12809' => 
    array (
      0 => 'E:\\Programs\\XAMPP\\htdocs\\wypozyczalnia_filmow\\app\\views\\main_page.tpl',
      1 => 1651948529,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6276bbf480e754_36905012 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19464796846276bbf47f2260_22881401', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_19464796846276bbf47f2260_22881401 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19464796846276bbf47f2260_22881401',
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
							<a>
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
