<?php include 'inc/header.php'; ?>
	
		<section class="container">
		
			<?php if($shop['picture']){ ?>
			
			<!-- SHOP -->
            <div class="shop-image">
            	<img src="<?php echo $shop['picture']; ?>" />
            </div>
            <?php } ?>
            
            
            
            <p style="padding:15px; text-align:center">
            
            <i class="icon-envelope" style="font-size:77px; color:green"></i>
            <br />
            Suscripto al Newsletter de esta tienda.
            </p>
            
            
            <!-- VOLVER -->
            <a class="btn btn-large btn-block" href="/<?php echo $shop['username']; ?>/articulos">Volver a los articulos</a>
            			
                       
        </section>

        
<?php include 'inc/footer.php'; ?>