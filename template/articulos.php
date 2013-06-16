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
			  <?php if($_POST['q']){ ?> 
			     <li><a href="/<?php echo $shop['username']; ?>/articulos">Articulos</a> <span class="divider">/</span></li>
			  	Busqueda: <li><?php echo $_POST['q']; ?></li>
			  <?php }else{ ?>
			  	 <li>Articulos</li>
			  <?php } ?>
			</ul>
            
            
            <!-- MAIN MENU -->
            <ul class="nav nav-tabs nav-stacked">
                
                <?php foreach($articulos as $articulo){ ?>
                <li>
                    <a href="/<?php echo $shop['username']; ?>/item/<?php echo $articulo['id']; ?>" class="clearfix pos-relative">
                        <div class="pull-left img" style="background-image:url('<?php echo $articulo['thumbnail']; ?>'); margin-right: 10px; background-size: 100% 100%;"></div>
                        <div class="pull-left" style="width:80% !important;">
                            <strong style="margin:0; padding:0; font-size:14px;"><?php echo $articulo['title']; ?></strong><br>
                        
                            <span style="margin:0; padding:0; color:red; font-size:18px; font-weight:bold">$<?php echo $articulo['installments']['amount']; ?></span>
                            
                        </div>
                        
                        <i class="pos-absolute icon-chevron-right" style="top: 22px;right: 9px;"></i>
                    </a>
                </li>
                <?php } ?>
                
     
            </ul>
       

            
        </section>


<?php include 'inc/footer.php'; ?>