<?php
/* Smarty version 4.1.0, created on 2022-04-26 10:48:50
  from 'C:\xampp\htdocs\wypozyczalnia_filmow\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6267b1f278ab27_15656329',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '699847101733457b9f81c2972859c0bbd7c2e125' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wypozyczalnia_filmow\\app\\views\\templates\\main.tpl',
      1 => 1650962925,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6267b1f278ab27_15656329 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo (($tmp = $_smarty_tpl->tpl_vars['title']->value ?? null)===null||$tmp==='' ? "brak tytułu" ?? null : $tmp);?>
</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="https://unpkg.com/purecss@2.1.0/build/pure-min.css" integrity="sha384-yHIFVG6ClnONEA5yB5DJXfW2/KC173DIQrYoZMEtBvGzmf0PKiGyNEqe9N6BNDBH" crossorigin="anonymous">
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->asset_root;?>
/css/main.css" />
		<noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->asset_root;?>
/css/noscript.css" /></noscript>
	</head>
<body>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2161460376267b1f2789122_89772493', 'content');
?>

</body>
</html><?php }
/* {block 'content'} */
class Block_2161460376267b1f2789122_89772493 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2161460376267b1f2789122_89772493',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
