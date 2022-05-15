<?php
/* Smarty version 4.1.0, created on 2022-05-13 17:25:06
  from 'E:\Programs\XAMPP\htdocs\wypozyczalnia_filmow\app\views\editFilm_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_627e7852ed16d3_10719618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18c75c7f7e428a237849aa871cb772ff13ecc0b2' => 
    array (
      0 => 'E:\\Programs\\XAMPP\\htdocs\\wypozyczalnia_filmow\\app\\views\\editFilm_page.tpl',
      1 => 1652455055,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627e7852ed16d3_10719618 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2021530065627e7852eb2f28_96688101', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_2021530065627e7852eb2f28_96688101 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2021530065627e7852eb2f28_96688101',
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

	<!-- Form -->
	<section>
	<form method="post" action="#">
		<div class="row gtr-uniform">
			<div class="col-4 col-12-xsmall">
				<input type="text" name="demo-name" id="demo-name" value="" placeholder="<?php echo (($tmp = $_smarty_tpl->tpl_vars['filmTitle']->value ?? null)===null||$tmp==='' ? "Tytuł filmu" ?? null : $tmp);?>
" />
			</div>
			<div class="col-6 col-12-xsmall"></div>
			<div class="col-4 col-12-xsmall">
				<input type="text" name="demo-name" id="demo-name" value="" placeholder="<?php echo (($tmp = $_smarty_tpl->tpl_vars['filmDirectorName']->value ?? null)===null||$tmp==='' ? "Imię Reżysera" ?? null : $tmp);?>
" />
			</div>
			<div class="col-4 col-12-xsmall">
				<input type="text" name="demo-name" id="demo-name" value="" placeholder="<?php echo (($tmp = $_smarty_tpl->tpl_vars['filmDirectorSurName']->value ?? null)===null||$tmp==='' ? "Nazwisko Reżysera" ?? null : $tmp);?>
" />
			</div>
			<div class="col-3 col-12-xsmall"></div>
			<div class="col-4 col-12-xsmall">
				<input type="text" name="demo-name" id="demo-name" value="" placeholder="<?php echo (($tmp = $_smarty_tpl->tpl_vars['filmDate']->value ?? null)===null||$tmp==='' ? "Data filmu" ?? null : $tmp);?>
" />
			</div>
			<div class="col-6 col-12-xsmall"></div>
			<div class="col-4 col-12-xsmall">
				<select name="demo-category" id="demo-category">
					<option value=""><?php echo (($tmp = $_smarty_tpl->tpl_vars['filmGenre']->value ?? null)===null||$tmp==='' ? "Gatunek Filmu" ?? null : $tmp);?>
</option>
					<option value="1">Gatunek 1</option>
					<option value="1">Gatunek 1</option>
				</select>
			</div>
			<div class="col-6 col-12-xsmall"></div>
			<div class="col-4 col-12-xsmall">
				<select name="demo-category" id="demo-category">
					<option value=""><?php echo (($tmp = $_smarty_tpl->tpl_vars['filmRating']->value ?? null)===null||$tmp==='' ? "Ocena filmu" ?? null : $tmp);?>
</option>
					<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
					<?php }
}
?>
				</select>
			</div>
			<div class="col-6 col-12-xsmall"></div>
			<div class="col-4 col-12-xsmall">
				<input type="text" name="demo-name" id="demo-name" value="" placeholder="<?php echo (($tmp = $_smarty_tpl->tpl_vars['filmPrice']->value ?? null)===null||$tmp==='' ? "Cena filmu" ?? null : $tmp);?>
"	 />
			</div>
			
			<div class="col-12">
				<ul class="actions">
					<li><input type="submit" value="Dodaj" class="primary" /></li>
					<li><input type="reset" value="Reset" /></li>
					<!-- <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'viewLogin'),$_smarty_tpl ) );?>
" class="button">Zaloguj</a></li> -->
				</ul>
			</div>
		</div>
	</form>
	</section>
	
</div>
</div>

<?php
}
}
/* {/block 'content'} */
}
