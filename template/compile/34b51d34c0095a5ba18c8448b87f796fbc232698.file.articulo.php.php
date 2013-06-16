<?php /* Smarty version Smarty-3.1.13, created on 2013-06-16 06:10:39
         compiled from "/Users/Collide/Dropbox/MLA-Hackaton/www/template/articulo.php" */ ?>
<?php /*%%SmartyHeaderCode:186837440251bccdc6ba5f59-66372574%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34b51d34c0095a5ba18c8448b87f796fbc232698' => 
    array (
      0 => '/Users/Collide/Dropbox/MLA-Hackaton/www/template/articulo.php',
      1 => 1371347572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186837440251bccdc6ba5f59-66372574',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51bccdc6c8eae0_88697629',
  'variables' => 
  array (
    'arrayUsuario' => 0,
    'arrayArticulo' => 0,
    'imagen' => 0,
    'url_theme' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bccdc6c8eae0_88697629')) {function content_51bccdc6c8eae0_88697629($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/Collide/Dropbox/MLA-Hackaton/www/include/smarty/plugins/modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ("inc/header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
			  <li><a href="index.php">Tienda</a> <span class="divider">/</span></li>
			  <li><a href="articulos.php">Articulos</a> <span class="divider">/</span></li>
			  <li><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['arrayArticulo']->value['title'],55);?>
</li>
			</ul>
            
            
            
            
            <div id='mySwipe' style='max-width:500px; margin:0 auto; margin-bottom:20px;' class='swipe'>
			  <div class='swipe-wrap'>
			  	
			  	<?php  $_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imagen']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arrayArticulo']->value['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->key => $_smarty_tpl->tpl_vars['imagen']->value){
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
?>
			    <div> <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['url'];?>
" /> </div>
			    <?php } ?>
			  </div>
			</div>
            
            <ul class="nav nav-tabs common-list clearfix" style="margin-top: 10px; margin-bottom: 10px;">
               
                <li class="clearfix pos-relative" style="background:#fff">
                    <span class="pull-left" style="font-size:16px;"> Articulo <b style="color:#26750e"><?php echo $_smarty_tpl->tpl_vars['arrayArticulo']->value['condition'];?>
</b></span>
                </li>
                                
                                                
                <li class="clearfix pos-relative"  style="background:#fff">
                 <span class="pull-right" style="color:red; font-size:24px; font-weight:bold"> $<?php echo $_smarty_tpl->tpl_vars['arrayArticulo']->value['price'];?>
</span>
                </li>
                                
            </ul>

            
            <!-- COMPRAR -->
            <a class="btn btn-primary btn-large btn-block" href="comprar.php">COMPRAR</a>
			
			<!-- MAIN MENU -->
            <ul class="nav nav-tabs nav-stacked" style="margin-top:20px;">
                
                <li>
                    <a href="calificaciones.php" class="clearfix pos-relative">
                        <h5> Descripcion </h5>
                        <i class="pos-absolute icon-chevron-right" style="top: 22px;right: 9px;"></i>
                    </a>
                </li>
                
                <li>
                    <a href="articulos.php" class="clearfix pos-relative">
                        <h5> Comentarios <span class="badge badge-warning pull-right">17</span> </h5>
                        <i class="pos-absolute icon-chevron-right" style="top: 22px;right: 9px;"></i>
                    </a>
                </li>
     
            </ul>
			
			
			<!-- EXTRA MENU -->
            <ul class="nav nav-tabs nav-stacked">
                
                <li>
                    <a href="?url=guardar&articulo=<?php echo $_smarty_tpl->tpl_vars['arrayArticulo']->value['id'];?>
" class="clearfix pos-relative">
                        <h5 style="color:green !important"> <i class="icon-ok-sign"></i> Guardar  </h5>
                        <i class="pos-absolute icon-chevron-right" style="top: 22px;right: 9px;"></i>
                    </a>
                </li>
                
                <li>
                    <a href="denunciar.php" class="clearfix pos-relative">
                        <h5 style="color:red !important"> <i class="icon-ban-circle"></i> Denunciar </h5>
                        <i class="pos-absolute icon-chevron-right" style="top: 22px;right: 9px;"></i>
                    </a>
                </li>
     
            </ul>
			

            
        </section>

        <!-- JS GALERY -->
        <script src='<?php echo $_smarty_tpl->tpl_vars['url_theme']->value;?>
/js/swipe.js'></script>
        <link href="<?php echo $_smarty_tpl->tpl_vars['url_theme']->value;?>
/css/swipe.css" rel="stylesheet">
		<script>
		
		// pure JS
		var elem = document.getElementById('mySwipe');
		window.mySwipe = Swipe(elem, {
		  // startSlide: 4,
		  auto: 3000,
		  // continuous: true,
		  // disableScroll: true,
		  // stopPropagation: true,
		  // callback: function(index, element) {},
		  // transitionEnd: function(index, element) {}
		});
		
		// with jQuery
		// window.mySwipe = $('#mySwipe').Swipe().data('Swipe');
		
		</script>
<?php echo $_smarty_tpl->getSubTemplate ("inc/footer.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>