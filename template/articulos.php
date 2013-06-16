{include file="inc/header.php"}
	
		<section class="container">
			<!-- SHOP -->
            {if $arrayUsuario.picture}
            <div class="shop-image">
            	<img src="{$arrayUsuario.picture}" />
            </div>
            {/if}
           
            <!-- NAVEGACION -->
            <ul class="breadcrumb">
			  <li><a href="index.php">Home</a> <span class="divider">/</span></li>
			  <li>Articulos</li>
			</ul>
            
            
            <!-- MAIN MENU -->
            <ul class="nav nav-tabs nav-stacked">
  
            {foreach from=$arrayArticulos item=articulo}
                <li>
                    <a href="?url=articulo&articulo={$articulo.id}" class="clearfix pos-relative">
                        <div class="pull-left img" style="background-image:url('{$articulo.thumbnail}'); margin-right: 10px; background-size: 100% 100%;"></div>
                        <div class="pull-left" style="width:80% !important;">
                            <strong style="margin:0; padding:0; font-size:14px;">{$articulo.title}</strong><br>
                        
                            <span style="margin:0; padding:0; color:red; font-size:18px; font-weight:bold">{$articulo.installments.amount}</span>
                            
                            <ul class="unstyled clearfix social-service">
                                <li class="pull-left">
                                    <i class="icon-fanpage-sign"></i>
                                </li>
                            </ul>
                        </div>
                        
                        <i class="pos-absolute icon-chevron-right" style="top: 22px;right: 9px;"></i>
                    </a>
                </li>
            {/foreach}
     
            </ul>
       

            
        </section>

{include file="inc/footer.php"}