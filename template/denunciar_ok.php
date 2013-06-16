<?php include 'inc/header.php'; ?>
	
		<section class="container">
		
			<?php if($shop['picture']){ ?>
			
			<!-- SHOP -->
            <div class="shop-image">
            	<img src="<?php echo $shop['picture']; ?>" />
            </div>
            <?php } ?>
            
            <?php if($articulo){ ?>
            
            <!-- NAVEGACION -->
            <ul class="breadcrumb">
			  <li><a href="/<?php echo $shop['username']; ?>">Tienda</a> <span class="divider">/</span></li>			  
			  <li><a href="/<?php echo $shop['username']; ?>/articulos">Articulos</a> <span class="divider">/</span></li>
			  <li><a href="/<?php echo $shop['username']; ?>/item/<?php echo $articulo['id'];?>">Item</a> <span class="divider">/</span></li>			  
			  <li>Denunciar</li>
			</ul>
			
            <?php }else{ ?>
            
            <!-- NAVEGACION -->
            <ul class="breadcrumb">
			  <li><a href="/<?php echo $shop['username']; ?>">Tienda</a> <span class="divider">/</span></li>			  
			  <li>Denunciar</li>
			</ul>

            
            <?php } ?>
            
            <p style="padding:15px; text-align:center">
            
            <i class="icon-envelope" style="font-size:77px; color:green"></i>
            <br />
            Mensaje Enviado
            </p>
            
            
            <!-- VOLVER -->
            <a class="btn btn-large btn-block" href="/<?php echo $shop['username']; ?>/articulos">Volver a los articulos</a>
            			
                       
        </section>

        
<?php include 'inc/footer.php'; ?>