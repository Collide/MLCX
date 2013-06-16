<?php /* Smarty version Smarty-3.1.13, created on 2013-06-15 22:29:08
         compiled from "/Users/Collide/Dropbox/MLA-Hackaton/www/template/articulos.php" */ ?>
<?php /*%%SmartyHeaderCode:37400966651bce08a8d5448-35256580%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa77051e8b8827a4dbc1b27f701d8bbfae741016' => 
    array (
      0 => '/Users/Collide/Dropbox/MLA-Hackaton/www/template/articulos.php',
      1 => 1371335336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37400966651bce08a8d5448-35256580',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51bce08a959498_88898173',
  'variables' => 
  array (
    'arrayUsuario' => 0,
    'arrayArticulos' => 0,
    'articulo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bce08a959498_88898173')) {function content_51bce08a959498_88898173($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("inc/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
		<section class="container">
			<!-- SHOP -->
            <?php if ($_smarty_tpl->tpl_vars['arrayUsuario']->value['picture']){?>
            <div class="shop-image">
            	<img src="<?php echo $_smarty_tpl->tpl_vars['arrayUsuario']->value['picture'];?>
" />
            </div>
            <?php }?>
           
            <!-- NAVEGACION -->
            <ul class="breadcrumb">
			  <li><a href="index.php">Home</a> <span class="divider">/</span></li>
			  <li>Articulos</li>
			</ul>
            
            
            <!-- MAIN MENU -->
            <ul class="nav nav-tabs nav-stacked">
  
            <?php  $_smarty_tpl->tpl_vars['articulo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['articulo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arrayArticulos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['articulo']->key => $_smarty_tpl->tpl_vars['articulo']->value){
$_smarty_tpl->tpl_vars['articulo']->_loop = true;
?>
                <li>
                    <a href="?url=articulo&articulo=<?php echo $_smarty_tpl->tpl_vars['articulo']->value['id'];?>
" class="clearfix pos-relative">
                        <div class="pull-left img" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['articulo']->value['thumbnail'];?>
'); margin-right: 10px; background-size: 100% 100%;"></div>
                        <div class="pull-left" style="width:80% !important;">
                            <strong style="margin:0; padding:0; font-size:14px;"><?php echo $_smarty_tpl->tpl_vars['articulo']->value['title'];?>
</strong><br>
                        
                            <span style="margin:0; padding:0; color:red; font-size:18px; font-weight:bold"><?php echo $_smarty_tpl->tpl_vars['articulo']->value['installments']['amount'];?>
</span>
                            
                            <ul class="unstyled clearfix social-service">
                                <li class="pull-left">
                                    <i class="icon-fanpage-sign"></i>
                                </li>
                            </ul>
                        </div>
                        
                        <i class="pos-absolute icon-chevron-right" style="top: 22px;right: 9px;"></i>
                    </a>
                </li>
            <?php } ?>
     
            </ul>
       

            
        </section>

<?php echo $_smarty_tpl->getSubTemplate ("inc/footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>