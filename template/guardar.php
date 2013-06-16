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
			  <li>Guardar</li>
			</ul>

            <?php }else{ ?>
            
            <!-- NAVEGACION -->
            <ul class="breadcrumb">
			  <li><a href="/<?php echo $shop['username']; ?>">Tienda</a> <span class="divider">/</span></li>			  
			  <li>Guardar</li>
			</ul>

            
            <?php } ?>
            
            <p style="padding:15px; text-align:center">
            
            <i class="icon-ok-sign" style="font-size:77px; color:green"></i>
            <br />
            <?php echo $mensaje; ?>
            </p>
            
            
            <!-- VOLVER -->
            <a class="btn btn-large btn-block" href="/<?php echo $shop['username']; ?>/articulos">Volver a los articulos</a>
            
            <?php if($alerta){ ?>			
            <!-- ALERT -->
            <div style="background:#f6f6f6; padding:15px; border-radius:5px; margin-top:15px; text-align:center">
            	
            	No estas conectado con tu cuenta de mercadolibre, para acceder a mas funcionalidades te invitamos a conectarte.
            	<br />
            	<a class="btn btn-primary btn-large btn-block" style="margin-top:20px;" href="/conectar">Conectar</a>
            	
            </div>	
            
            <?php } ?>		

            
        </section>

        
<?php include 'inc/footer.php'; ?>