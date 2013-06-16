<?php include 'inc/header.php'; ?>
	
		<section class="container">
		
			<?php if($shop['picture']){ ?>
			<!-- SHOP -->
            <div class="shop-image">
            	<img src="<?php echo $shop['picture']; ?>" />
            </div>
            <?php } ?>
            
            <!-- MAIN MENU -->
            <ul class="nav nav-tabs nav-stacked">
                
                <li>
                    <a href="/<?php echo $shop['username']; ?>/articulos" class="clearfix pos-relative">
                        <h5> Articulos </h5>
                        <i class="pos-absolute icon-chevron-right" style="top: 22px;right: 9px;"></i>
                    </a>
                </li>
                
                <li>
                    <a href="/<?php echo $shop['username']; ?>/reputacion" class="clearfix pos-relative">
                        <h5> Reputacion </h5>
                        <i class="pos-absolute icon-chevron-right" style="top: 22px;right: 9px;"></i>
                    </a>
                </li>
     
            </ul>
            
            
            <!-- REPUTACION -->
            
            <div style="margin:15px;">
			  
			  <img src="<?php echo $shop['seller_reputation']['image']; ?>" />
			  
			</div>
			
			
			 <!-- EXTRA MENU -->
            <ul class="nav nav-tabs nav-stacked">
                
                <li>
                    <a href="/<?php echo $shop['username']; ?>/guardar" class="clearfix pos-relative">
                        <h5 style="color:green !important"> <i class="icon-ok-sign"></i> Guardar  </h5>
                        <i class="pos-absolute icon-chevron-right" style="top: 22px;right: 9px;"></i>
                    </a>
                </li>
                
                <li>
                    <a href="/<?php echo $shop['username']; ?>/denunciar" class="clearfix pos-relative">
                        <h5 style="color:red !important"> <i class="icon-ban-circle"></i> Denunciar </h5>
                        <i class="pos-absolute icon-chevron-right" style="top: 22px;right: 9px;"></i>
                    </a>
                </li>
     
            </ul>

            
            <div style="padding:15px; margin:10px;">
            

<form method="post" action="/<?php echo $shop['username']; ?>/newsletter_ok">
  <fieldset>
    <legend>Newsletter</legend>
    <p> Reciba los nuevos articulos de este local </p>	    
    
    <label>Email:</label>
    <input name="email" value="" />
    
    <br />   <br />
    <button type="submit" class="btn btn-primary">Suscribir</button>
  </fieldset>
</form>

</div>
            
            
        </section>


<?php include 'inc/footer.php'; ?>