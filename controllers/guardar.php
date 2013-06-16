<?php
$id_vendedor = $_GET['tienda'];
$item = $_GET['articulo'];
// Iniciamos oAuth.
global $ml;
$user = $ml->me();

if ($user){
	// Logged
	// Guardamos array de Productos "favoritos" en la base de datos
 	$mySQL->query("INSERT INTO favoritos (id_usuario,id_tienda,id_producto) VALUES ('$id_usuario', '$id_tienda', '$id_producto')");

}else{
	// No Logged
	
	$login_url = $ml->get_lucky(); // ;) (We love Daft Punk) https://youtu.be/5NV6Rdv1a3I
	echo "Che, no estas logueado, haceme el favor.";
	echo "<br> Mientras tanto, te lo guardamos en las cookies";

}

	set_cronology('ml_items', $item);
	set_cronology('ml_tienda', $id_vendedor);


	$smarty = new Smarty_MLA;
	$smarty->assign('login_url', $login_url);
	$smarty->display('login.tpl');
?>