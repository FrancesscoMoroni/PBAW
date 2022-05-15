<?php
/* Smarty version 4.1.0, created on 2022-05-10 10:34:22
  from 'C:\xampp\htdocs\wypozyczalnia_filmow\app\views\editFilm_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_627a238e272477_14213482',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb18dc80397b96fd75d1df821eb739edeeafde76' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wypozyczalnia_filmow\\app\\views\\editFilm_page.tpl',
      1 => 1652171654,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627a238e272477_14213482 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1663353885627a238e250989_71130629', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1663353885627a238e250989_71130629 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1663353885627a238e250989_71130629',
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
