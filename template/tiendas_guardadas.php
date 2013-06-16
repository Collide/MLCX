	<?php include 'inc/head.php'; ?>

    	<body class="body-projects">
        <header class="pos-fixed clearfix">
            <h1 class="pull-left"> <a href="/home"><img src="/template/img/logo.png" /></a> </h1>
        </header>
	
		<section class="container">
		
			            
            <!-- NAVEGACION -->
            <ul class="breadcrumb">
			  <li><a href="/home">Inicio</a> <span class="divider">/</span></li>			  
			  <li>Tiendas</li>
			</ul>
            
            
            <!-- MAIN MENU -->
            <ul class="nav nav-tabs nav-stacked">
                
                <?php foreach($r as $shop){ ?>
                <li>
	                <a href="/<?php echo $shop['username']; ?>" class="clearfix pos-relative">
	                    <h5> <?php echo $shop['username']; ?>  </h5>
	                    <i class="pos-absolute icon-chevron-right" style="top: 22px;right: 9px;"></i>
	                </a>
	            </li>               
	            <?php } ?>
                
     
            </ul>
       

            
        </section>


<?php include 'inc/footer.php'; ?>