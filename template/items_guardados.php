	<?php include 'inc/head.php'; ?>

    	<body class="body-projects">
        <header class="pos-fixed clearfix">
            <h1 class="pull-left"> <a href="/home"><img src="/template/img/logo.png" /></a> </h1>
        </header>
	
		<section class="container">
		
			            
            <!-- NAVEGACION -->
            <ul class="breadcrumb">
			  <li><a href="/home">Inicio</a> <span class="divider">/</span></li>			  
			  <li>Items</li>
			</ul>
            
            
            <!-- MAIN MENU -->
            <ul class="nav nav-tabs nav-stacked">
                
                <?php foreach($r as $articulo){ ?>
                <li>
                    <a href="/<?php echo $articulo['user']['username']; ?>/item/<?php echo $articulo['id']; ?>" class="clearfix pos-relative">
                        <div class="pull-left img" style="background-image:url('<?php echo $articulo['thumbnail']; ?>'); margin-right: 10px; background-size: 100% 100%;"></div>
                        <div class="pull-left" style="width:80% !important;">
                            <strong style="margin:0; padding:0; font-size:14px;"><?php echo $articulo['title']; ?></strong><br>
                        
                            <span style="margin:0; padding:0; color:red; font-size:18px; font-weight:bold">$<?php echo $articulo['price']; ?></span>
                            
                        </div>
                        
                        <i class="pos-absolute icon-chevron-right" style="top: 22px;right: 9px;"></i>
                    </a>
                </li>
                <?php } ?>
                
     
            </ul>
       

            
        </section>


<?php include 'inc/footer.php'; ?>