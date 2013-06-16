<?php include 'inc/header.php'; ?>
	
		<section class="container">
		
			<?php if($shop['picture']){ ?>
			
			<!-- SHOP -->
            <div class="shop-image">
            	<img src="<?php echo $shop['picture']; ?>" />
            </div>
            <?php } ?>
            
            <!-- NAVEGACION -->
            <ul class="breadcrumb">
			  <li><a href="/<?php echo $shop['username']; ?>">Tienda</a> <span class="divider">/</span></li>			  
			  <li><a href="/<?php echo $shop['username']; ?>/articulos">Articulos</a> <span class="divider">/</span></li>			  
			  <li><?php echo substr($articulo['title'],0,15); ?>...</li>
			</ul>

            
            
            
            
            <div id='mySwipe' style='max-width:500px; margin:0 auto; margin-bottom:20px;' class='swipe'>
			  <div class='swipe-wrap'>
			  	
			  	<?php foreach($articulo['pictures'] as $imagen){ ?>
			    <div> <img src="<?php echo $imagen['url']; ?>" /> </div>
			    <?php } ?>
			  </div>
			</div>
            
            
            <ul class="nav nav-tabs common-list clearfix" style="margin-top: 10px; margin-bottom: 10px;">
               
                <li class="clearfix pos-relative" style="background:#fff">
                    <span class="pull-left" style="font-size:16px;"> Articulo <b style="color:#26750e"><?php echo ($articulo['condition'] == 'new' ? 'Nuevo' : 'Usado'); ?></b></span>
                </li>
                                
                                                
                <li class="clearfix pos-relative"  style="background:#fff">
                 <span class="pull-right" style="color:red; font-size:24px; font-weight:bold"> $<?php echo $articulo['price']?></span>
                </li>
                                
            </ul>

            
            <!-- COMPRAR -->
            <a class="btn btn-primary btn-large btn-block" href="https://buyingflow.mercadolibre.com.ar/checkout/start?item_id=<?php echo $articulo['id']; ?>">COMPRAR</a>
			
			<!-- MAIN MENU -->
            <ul class="nav nav-tabs nav-stacked" style="margin-top:20px;">
                
                <li>
                    <a href="/<?php echo $shop['username']; ?>/item/<?php echo $articulo['id'];?>/descripcion" class="clearfix pos-relative">
                        <h5> Descripcion </h5>
                        <i class="pos-absolute icon-chevron-right" style="top: 22px;right: 9px;"></i>
                    </a>
                </li>
                
                <li>
                    <a href="/<?php echo $shop['username']; ?>/item/<?php echo $articulo['id'];?>/preguntas" class="clearfix pos-relative">
                        <h5> Preguntas </h5>
                        <i class="pos-absolute icon-chevron-right" style="top: 22px;right: 9px;"></i>
                    </a>
                </li>
     
            </ul>
			
			
			<!-- EXTRA MENU -->
            <ul class="nav nav-tabs nav-stacked">
                
                <li>
                    <a href="/<?php echo $shop['username']; ?>/item/<?php echo $articulo['id'];?>/guardar" class="clearfix pos-relative">
                        <h5 style="color:green !important"> <i class="icon-ok-sign"></i> Guardar  </h5>
                        <i class="pos-absolute icon-chevron-right" style="top: 22px;right: 9px;"></i>
                    </a>
                </li>
                
                <li>
                    <a href="/<?php echo $shop['username']; ?>/item/<?php echo $articulo['id'];?>/denunciar" class="clearfix pos-relative">
                        <h5 style="color:red !important"> <i class="icon-ban-circle"></i> Denunciar </h5>
                        <i class="pos-absolute icon-chevron-right" style="top: 22px;right: 9px;"></i>
                    </a>
                </li>
     
            </ul>
			

            
        </section>

        <!-- JS GALERY -->
        <script src='/template/js/swipe.js'></script>
        <link href="/template/css/swipe.css" rel="stylesheet">
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


<?php include 'inc/footer.php'; ?>