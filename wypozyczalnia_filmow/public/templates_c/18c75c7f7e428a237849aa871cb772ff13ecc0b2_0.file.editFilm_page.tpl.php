<?php
/* Smarty version 4.1.0, created on 2022-06-05 18:33:32
  from 'E:\Programs\XAMPP\htdocs\wypozyczalnia_filmow\app\views\editFilm_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629cdadcdd0805_20448913',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18c75c7f7e428a237849aa871cb772ff13ecc0b2' => 
    array (
      0 => 'E:\\Programs\\XAMPP\\htdocs\\wypozyczalnia_filmow\\app\\views\\editFilm_page.tpl',
      1 => 1654446772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_629cdadcdd0805_20448913 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2136146519629cdadcdbebd7_64358244', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_2136146519629cdadcdbebd7_64358244 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2136146519629cdadcdbebd7_64358244',
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
	</header>

	<!-- Form -->
	<section>
	<form id="editPageForm" onsubmit="ajaxPostFormRedirect('editPageForm','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
editFilm','error','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
viewEditFilm'); return false;">
		<div class="row gtr-uniform">
			<div class="col-4 col-12-xsmall">
				<input type="text" name="filmName" id="filmName" value="<?php echo $_smarty_tpl->tpl_vars['filmData']->value[0]["name"];?>
" placeholder="Nazwa Filmu" />
			</div>
			<div class="col-6 col-12-xsmall"></div>
			<div class="col-4 col-12-xsmall">
				<input type="text" name="filmDirectorName" id="filmDirectorName" value="<?php echo $_smarty_tpl->tpl_vars['directorData']->value[0]["name"];?>
" placeholder="Imię reżysera" />
			</div>
			<div class="col-4 col-12-xsmall">
				<input type="text" name="filmDirectorSurname" id="filmDirectorSurname" value="<?php echo $_smarty_tpl->tpl_vars['directorData']->value[0]["surname"];?>
" placeholder="Nazwisko reżysera" />
			</div>
			<div class="col-3 col-12-xsmall"></div>
			<div class="col-4 col-12-xsmall">
				<input type="text" name="filmDate" id="filmDate" value="<?php echo $_smarty_tpl->tpl_vars['filmData']->value[0]["release_date"];?>
" placeholder="Data wydania" />
			</div>
			<div class="col-6 col-12-xsmall"></div>
			<div class="col-4 col-12-xsmall">
				<input type="text" name="filmGenre" id="filmGenre" value="<?php echo $_smarty_tpl->tpl_vars['filmData']->value[0]["movie_genre"];?>
" placeholder="Gatunek filmu" />
			</div>
			<div class="col-6 col-12-xsmall"></div>
			<div class="col-4 col-12-xsmall">
				<input type="text" name="filmDescription" id="filmDescription" value="<?php echo $_smarty_tpl->tpl_vars['filmData']->value[0]["description"];?>
" placeholder="Opis filmu" />
			</div>
			<div class="col-6 col-12-xsmall"></div>
			<div class="col-4 col-12-xsmall">
				<select name="filmRating" id="filmRating">
					<option value="<?php echo $_smarty_tpl->tpl_vars['filmData']->value[0]["rating"];?>
"><?php echo $_smarty_tpl->tpl_vars['filmData']->value[0]["rating"];?>
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
				<input type="text" name="filmImg" id="filmImg" value="<?php echo $_smarty_tpl->tpl_vars['filmData']->value[0]["film_img"];?>
" placeholder="Nazwa pliku jpg" />
			</div>
			<div class="col-6 col-12-xsmall"></div>
			<div class="col-4 col-12-xsmall">
				<input type="text" name="filmPrice" id="filmPrice" value="<?php echo $_smarty_tpl->tpl_vars['filmData']->value[0]["price"];?>
" placeholder="Cena"	 />
			</div>
			<div class="col-12">
				<ul class="actions">
					<li><input type="submit" value="Edytuj" class="primary" /></li>
					<li><input type="reset" value="Reset" /></li>
				</ul>
			</div>
			<div class="col-6 col-12-xsmall">
				<input type="hidden" name="filmID" id="filmID" value="<?php echo $_smarty_tpl->tpl_vars['filmID']->value;?>
" placeholder="ID" />
			</div>		
		</div>
	</form>
	</section>

	<div id = "error">
		<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</div>
	
</div>
</div>


<?php
}
}
/* {/block 'content'} */
}
