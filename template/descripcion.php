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
			  <li><a href="/<?php echo $shop['username']; ?>/item/<?php echo $articulo['id'];?>">Item</a> <span class="divider">/</span></li>			  
			  <li>Descripcion</li>
			</ul>
            
            
            <p style="padding:15px;">
            <?php echo $articulo['description']; ?>
            </p>
            
            
            <!-- VOLVER -->
            <a class="btn btn-large btn-block" href="/<?php echo $shop['username']; ?>/item/<?php echo $articulo['id'];?>">Volver</a>
            			
            			            
       </section>



<?php include 'inc/footer.php'; ?> 