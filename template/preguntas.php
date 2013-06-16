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
			  <li>Preguntas</li>
			</ul>

            
            <!-- VOLVER -->
            <a class="btn btn-large btn-block" href="/<?php echo $shop['username']; ?>/item/<?php echo $articulo['id'];?>">Volver</a>
            
            <!-- MAIN MENU -->
            <ul class="nav nav-tabs nav-stacked" style="margin-top:20px;">
                
                
                <?php foreach($preguntas as $pregunta){ ?>
                <li>
                    
                        <div class="pull-left" style="margin-bottom:10px; border-bottom:1px #CCC solid; padding:5px;  font-size:14px; width:98%">
                            <?php echo $pregunta['text']; ?>
                            
                            <?php if($pregunta['answer']){ ?>
                            <div style="background:#dfdfdf; padding:5px; margin-top:5px;">
                            	 <?php echo $pregunta['answer']['text']; ?>
                            </div>
                            <?php } ?>
                        
                        </div>
                                            
                </li>
                <?php } ?>
                
     
            </ul>
       
           <!-- VOLVER -->
           <a class="btn btn-large btn-block" href="articulo.php">Volver</a>

            
        </section>


<?php include 'inc/footer.php'; ?>