<?php
/* Smarty version 4.1.0, created on 2022-03-21 21:15:45
  from 'E:\Programs\XAMPP\htdocs\php_kalkulator_rat\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6238dcf1ae9260_51540590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2757d16c054becc93c972e9e51cc36788480077a' => 
    array (
      0 => 'E:\\Programs\\XAMPP\\htdocs\\php_kalkulator_rat\\templates\\main.tpl',
      1 => 1647893440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6238dcf1ae9260_51540590 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? "Podstawowy opis storny" ?? null : $tmp);?>
">

    <title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>

	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure.css">

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/main-grid.css">

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/layouts/marketing.css">

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/style.css">

<?php if ($_smarty_tpl->tpl_vars['hide_intro']->value) {?>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/style_hide_intro.css">
<?php }?>
	
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/js/softscroll.js"><?php echo '</script'; ?>
>
</head>

<body>

<div id="app_top" class="header">
    <div class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href=""><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł nagłówek" ?? null : $tmp);?>
</a>
        <ul>
            <li class="pure-menu-selected"><a href="#app_top">Góra strony</a></li>
            <li><a href="#app_content">Idź do formularza</a></li>
            <li class="home-logout"><a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/security/logout.php">Wyloguj</a></li>
        </ul>
    </div>
</div>

<div class="splash-container">
    <div class="splash">
        <h1 class="splash-head"><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_header']->value ?? null)===null||$tmp==='' ? "Cośtam cośtam" ?? null : $tmp);?>
</h1>
        <p class="splash-subhead">
             <?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? "Domyślny opis" ?? null : $tmp);?>

        </p>
    </div>
</div>


<div class="content-wrapper">

    <div id="app_content" class="content">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_969400136238dcf1ae8610_43874778', 'content');
?>


    </div>

<div class="footer l-box is-center">
    <p>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3407434016238dcf1ae8c63_00925569', 'footer');
?>

    </p>
    <p>Widok oparty na stylach i szablonie <a href="http://purecss.io/" target="_blank">Pure CSS Yahoo!</a>. (autor przykładu: Bartłomiej Kisiel)</p>
</div>

</div>


</body>
</html>
<?php }
/* {block 'content'} */
class Block_969400136238dcf1ae8610_43874778 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_969400136238dcf1ae8610_43874778',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_3407434016238dcf1ae8c63_00925569 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_3407434016238dcf1ae8c63_00925569',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}
