<?php /* Smarty version Smarty-3.1.13, created on 2013-06-15 23:08:53
         compiled from "/Users/Collide/Dropbox/MLA-Hackaton/www/template/inc/header.php" */ ?>
<?php /*%%SmartyHeaderCode:56388054851bccdc6c9f687-73839129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38570047c7682db9ba6e8d0a31e70c9fcbb8e8b2' => 
    array (
      0 => '/Users/Collide/Dropbox/MLA-Hackaton/www/template/inc/header.php',
      1 => 1371337725,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56388054851bccdc6c9f687-73839129',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51bccdc6d218f3_20699752',
  'variables' => 
  array (
    'url_theme' => 0,
    'arrayUsuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bccdc6d218f3_20699752')) {function content_51bccdc6d218f3_20699752($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("inc/head.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    <body class="body-projects">
        <header class="pos-fixed clearfix">
            <h1 class="pull-left"> <a href="index.php"><img src="<?php echo $_smarty_tpl->tpl_vars['url_theme']->value;?>
/img/logo.png" /></a> </h1>
            
            <<?php ?>?php if( strpos($_SERVER['REQUEST_URI'],'index.php') === false ){ ?<?php ?>>
            <h1 class="pull-right">
            	<a class="btn" style="margin-top:15px;" href="javascript:history.back();"> Volver </a>
            </h1>
            <<?php ?>?php } ?<?php ?>>
            
        </header>
        
        <form class="pos-fixed search" name="post_search" action="?url=busqueda" method="post">
            <input type="text" style="width: 78%;" id="q" name="q" placeholder="Buscar articulos en esta tienda..." value="">
            <input id="id_vendedor" name="id_vendedor" value="<?php echo $_smarty_tpl->tpl_vars['arrayUsuario']->value['username'];?>
" type="hidden" style="display:none">
            <button type="submit" class="btn pull-right"><i class="icon-search"></i></button>
        </form>           
     <?php }} ?>