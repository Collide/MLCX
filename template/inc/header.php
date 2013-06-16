	<?php include 'head.php'; ?>

    <body class="body-projects">
        <header class="pos-fixed clearfix">
            <h1 class="pull-left"> <a href="/home"><img src="/template/img/logo.png" /></a> </h1>
            
            <?php if( strpos($_SERVER['REQUEST_URI'],'index.php') === false ){ ?>
            <h1 class="pull-right">
            	<a class="btn" style="margin-top:15px;" href="javascript:history.back();"> Volver </a>
            </h1>
            <?php } ?>
            
        </header>
        
        <form class="pos-fixed search" name="post_search" method="post" action="/<?php echo $shop['username']; ?>/articulos">
            <input type="text" style="width: 78%;" id="q" name="q" placeholder="Buscar articulos en esta tienda..." value="<?php echo $_POST['q']; ?>">
            <button type="submit" class="btn pull-right"><i class="icon-search"></i></button>
        </form>           
     