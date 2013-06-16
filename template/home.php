	<?php include 'inc/head.php'; ?>

    <body class="body-projects">
        <header class="pos-fixed clearfix">
            <h1 class="pull-left"> <a href="/home"><img src="/template/img/logo.png" /></a> </h1>
        </header>
        
        <form class="pos-fixed search" name="post_search" method="post" action="/tienda">
            <input type="text" style="width: 78%;" id="q" name="q" placeholder="Buscar tienda por nombre..." value="">
            <button type="submit" class="btn pull-right"><i class="icon-search"></i></button>
        </form>           
     
     
             
        
     
		<section class="container">
				
				
			<?php if($user){ ?>
					
			 <!-- EXTRA MENU -->
	        <ul class="nav nav-tabs nav-stacked">
	            
	            <li>
	                <a href="/items_guardados" class="clearfix pos-relative">
	                    <h5> Articulos guardados  </h5>
	                    <i class="pos-absolute icon-chevron-right" style="top: 22px;right: 9px;"></i>
	                </a>
	            </li>
	            
	            <li>
	                <a href="/tiendas_guardadas" class="clearfix pos-relative">
	                    <h5>  Tiendas guardados </h5>
	                    <i class="pos-absolute icon-chevron-right" style="top: 22px;right: 9px;"></i>
	                </a>
	            </li>
	 
	        </ul>

     
	         <?php } ?>
		
					
			<p style="color:#2d3277; font-size:18px; text-align:center; margin:25px;"> <b>Sos vendedor?</b> </p>
            
            <!-- CONECTAR -->
            <a class="btn btn-primary btn-large btn-block" href="/conectar_qr">CONECTAR</a>

            
        </section>
        
       
       
<?php include 'inc/footer.php'; ?>