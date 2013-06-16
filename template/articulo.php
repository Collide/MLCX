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
			  <li><a href="index.php">Tienda</a> <span class="divider">/</span></li>
			  <li><a href="articulos.php">Articulos</a> <span class="divider">/</span></li>
			  <li>{$arrayArticulo.title|truncate:55}</li>
			</ul>
            
            
            
            
            <div id='mySwipe' style='max-width:500px; margin:0 auto; margin-bottom:20px;' class='swipe'>
			  <div class='swipe-wrap'>
			  	
			  	{foreach $arrayArticulo.pictures as $imagen}
			    <div> <img src="{$imagen.url}" /> </div>
			    {/foreach}
			  </div>
			</div>
            
            <ul class="nav nav-tabs common-list clearfix" style="margin-top: 10px; margin-bottom: 10px;">
               
                <li class="clearfix pos-relative" style="background:#fff">
                    <span class="pull-left" style="font-size:16px;"> Articulo <b style="color:#26750e">{$arrayArticulo.condition}</b></span>
                </li>
                                
                                                
                <li class="clearfix pos-relative"  style="background:#fff">
                 <span class="pull-right" style="color:red; font-size:24px; font-weight:bold"> ${$arrayArticulo.price}</span>
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
                    <a href="?url=guardar&articulo={$arrayArticulo.id}" class="clearfix pos-relative">
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
        <script src='{$url_theme}/js/swipe.js'></script>
        <link href="{$url_theme}/css/swipe.css" rel="stylesheet">
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
{include file="inc/footer.php"}