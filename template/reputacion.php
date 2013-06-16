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
			  <li>Reputacion</li>
			</ul>
		
            
            <!-- VOLVER -->
            <a class="btn btn-large btn-block" href="/<?php echo $shop['username']; ?>">Volver</a>
            
            <!-- MAIN MENU -->
            <ul class="nav nav-tabs nav-stacked" style="margin-top:20px;">
                
                
                <?php foreach($mensajes as $mensaje){ ?>
                <li>
                    
                        <div class="pull-left" style="margin-bottom:10px; border-bottom:1px #CCC solid; padding:5px; font-size:14px; width:98%">
                        	<img src="<?php echo $mensaje['image']?>" align="absmiddle" />
                            <?php echo utf8_decode($mensaje['text']); ?>                        
                        
                        </div>
                                            
                </li>
                <?php } ?>
                
     
            </ul>
       
           <!-- VOLVER -->
           <a class="btn btn-large btn-block" href="/<?php echo $shop['username']; ?>">Volver</a>

            
        </section>


<?php include 'inc/footer.php'; ?>