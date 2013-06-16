<?php
$id_vendedor = $_GET['tienda'];
$item = $_GET['articulo'];
	set_cronology('ml_items', $item);
	set_cronology('ml_tienda', $id_vendedor);
// Iniciamos oAuth.
global $ml;
global $mySQL;
$user = $ml->me();

if ($user){
	// Logged
	// Guardamos array de Productos "favoritos" en la base de datos
	$id_usuario = $_SESSION['id_usuario'];

	foreach ($_COOKIE['ml_items'] as &$items) {
		$consulta_items = $mySQL->query("SELECT id_usuario, id_articulo FROM favoritos_items WHERE id_usuario='$id_usuario' AND id_articulo='$items'");
    	if($consulta_items->num_rows == 0){
			$mySQL->query("INSERT INTO favoritos_items (id_usuario,id_articulo) VALUES ('$id_usuario', '$items')");
			echo $items;
			echo "<br>";
    	}
	}
	foreach ($_COOKIE['ml_tienda'] as &$tiendas){
		$consulta_tienda = $mySQL->query("SELECT id_usuario, id_tienda FROM favoritos_tiendas WHERE id_usuario='$id_usuario' AND id_tienda='$tiendas'");
    	if($consulta_tienda->num_rows == 0){
			$mySQL->query("INSERT INTO favoritos_tiendas (id_usuario,id_tienda) VALUES ('$id_usuario', '$tiendas')");
			echo $tiendas;
			echo "<br>";
		}
	}
 	
		
}else{
	// No Logged
	
	$login_url = $ml->get_lucky(); // ;) (We love Daft Punk) https://youtu.be/5NV6Rdv1a3I
	echo "Che, no estas logueado, haceme el favor.";
	echo "<br> Mientras tanto, te lo guardamos en las cookies";

}


	$smarty = new Smarty_MLA;
	$smarty->assign('login_url', $login_url);
	$smarty->display('login.tpl');
?>