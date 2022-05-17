<?php
/* Smarty version 4.1.0, created on 2022-05-17 08:15:25
  from 'C:\xampp\htdocs\wypozyczalnia_filmow\app\views\addFilm_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62833d7de14087_64550386',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2aeac8a8cce78010f60ed25d78a63f78bab3542' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wypozyczalnia_filmow\\app\\views\\addFilm_page.tpl',
      1 => 1652767954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62833d7de14087_64550386 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191703579362833d7dcc2734_03951921', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_191703579362833d7dcc2734_03951921 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_191703579362833d7dcc2734_03951921',
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
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
addFilm">
		<div class="row gtr-uniform">
			<div class="col-4 col-12-xsmall">
				<input type="text" name="filmName" id="filmName" value="" placeholder="Nazwa Filmu" />
			</div>
			<div class="col-6 col-12-xsmall"></div>
			<div class="col-4 col-12-xsmall">
				<input type="text" name="filmDirectorName" id="filmDirectorName" value="" placeholder="Imię Reżysera" />
			</div>
			<div class="col-4 col-12-xsmall">
				<input type="text" name="filmDirectorSurname" id="filmDirectorSurname" value="" placeholder="Nazwisko Reżysera" />
			</div>
			<div class="col-3 col-12-xsmall"></div>
			<div class="col-4 col-12-xsmall">
				<input type="text" name="filmDate" id="filmDate" value="" placeholder="Data wydania" />
			</div>
			<div class="col-6 col-12-xsmall"></div>
			<div class="col-4 col-12-xsmall">
				<input type="text" name="filmGenre" id="filmGenre" value="" placeholder="Gtunek filmu" />
			</div>
			<div class="col-6 col-12-xsmall"></div>
			<div class="col-4 col-12-xsmall">
				<input type="text" name="filmDescription" id="filmDescription" value="" placeholder="Opis filmu" />
			</div>
			<div class="col-6 col-12-xsmall"></div>
			<div class="col-4 col-12-xsmall">
				<select name="filmRating" id="filmRating">
					<option value="">Ocena</option>
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
				<input type="text" name="filmImg" id="filmImg" value="" placeholder="Nazwa obrazu filmu" />
			</div>
			<div class="col-6 col-12-xsmall"></div>
			<div class="col-4 col-12-xsmall">
				<input type="text" name="filmPrice" id="filmPrice" value="" placeholder="Cena"	 />
			</div>
			<div class="col-12">
				<ul class="actions">
					<li><input type="submit" value="Dodaj" class="primary" /></li>
					<li><input type="reset" value="Reset" /></li>
				</ul>
			</div>
			
		</div>
	</form>
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
	<?php echo $_smarty_tpl->tpl_vars['form']->value->filmID;?>

	
</div>
</div>

<?php
}
}
/* {/block 'content'} */
}
