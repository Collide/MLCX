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
            
            
            <div style="padding:15px; margin:10px;">
            
           
            <form method="post" action="/<?php echo $shop['username']; ?>/item/<?php echo $articulo['id'];?>/denunciar_ok">
			  <fieldset>
			    <legend>Denunciar</legend>
			    <label>Motivo</label>
			    <select name="motivo">
			    	<option value="Articulos falsos" selected="selected">Articulos falsos</option>
				    <option value="Tienda ilegal">Tienda ilegal</option>
				    <option value="Otros">Otros</option>
			    </select>			    
			    
			    <label>Mensaje:</label>
			    <textarea placeholder="Escribe el mensaje..." style="width:100%"></textarea>
			    
			    <br />
			    <button type="submit" class="btn btn-primary">Enviar</button>
			  </fieldset>
			</form>
			
            </div>

            
        </section>

        
<?php include 'inc/footer.php'; ?>