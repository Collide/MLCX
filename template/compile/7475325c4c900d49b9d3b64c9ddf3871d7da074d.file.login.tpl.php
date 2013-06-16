<?php /* Smarty version Smarty-3.1.13, created on 2013-06-16 03:13:42
         compiled from "/Users/Collide/Dropbox/MLA-Hackaton/www/template/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129020701951bca6f90f4d62-56045864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7475325c4c900d49b9d3b64c9ddf3871d7da074d' => 
    array (
      0 => '/Users/Collide/Dropbox/MLA-Hackaton/www/template/login.tpl',
      1 => 1371352413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129020701951bca6f90f4d62-56045864',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51bca6f9164bb3_77046710',
  'variables' => 
  array (
    'login_url' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bca6f9164bb3_77046710')) {function content_51bca6f9164bb3_77046710($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h1>Crear codigo QR para tu tienda</h1>
	<a href="<?php echo $_smarty_tpl->tpl_vars['login_url']->value;?>
">Login con MercadoLibre</a> -
	<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/?url=login&meli-logout">Salir</a>
	<br>------------------------------------------------------<br>

	<?php echo $_SESSION['user']['first_name'];?>

	<?php echo $_SESSION['user']['last_name'];?>

	<?php echo $_SESSION['user']['nickname'];?>

</body>
</body>
</html><?php }} ?>