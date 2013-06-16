<?php
	
	if($_PAGE[2])
	{
		$articulo = $ml->item( $_PAGE[2] );
		$shop = $ml->user( $articulo['seller_id'] );
		$url_redirect = $shop['username'] .'/item/'. $_PAGE[2] .'/guardar';
	}
	else
	{
		$shop = $ml->user( $_PAGE[0] );
		$url_redirect = $shop['username'] .'/guardar';
	}
	
	
	$id_vendedor = $_PAGE[0];
	$item = $_PAGE[2];
	set_cronology('ml_items', $item);
	set_cronology('ml_tienda', $id_vendedor);
	
	if(!$_SESSION['redireccionado'])
	{
		$_SESSION['redireccionado'] = true;
	}else{
		unset($_SESSION['redireccionado']);
	}

	if($_SESSION['redireccionado'])
	{
		redirect( $url_redirect );
	}
// Iniciamos oAuth.
global $ml;
global $mySQL;

$user = $ml->me();
if ($user)
{
	// Logged
	$id_usuario = $_SESSION['id_usuario'];
	if($_COOKIE['ml_items'])
	{
		foreach ($_COOKIE['ml_items'] as &$items) {
			$consulta_items = $mySQL->query("SELECT id_usuario, id_articulo FROM favoritos_items WHERE id_usuario='$id_usuario' AND id_articulo='$items'");
	    	if($consulta_items->num_rows == 0){
				$mySQL->query("INSERT INTO favoritos_items (id_usuario,id_articulo) VALUES ('$id_usuario', '$items')");
	    	}
		}
	}
	if($_COOKIE['ml_tienda'])
	{
		foreach ($_COOKIE['ml_tienda'] as &$tiendas){
			$consulta_tienda = $mySQL->query("SELECT id_usuario, id_tienda FROM favoritos_tiendas WHERE id_usuario='$id_usuario' AND id_tienda='$tiendas'");
	    	if($consulta_tienda->num_rows == 0){
				$mySQL->query("INSERT INTO favoritos_tiendas (id_usuario,id_tienda) VALUES ('$id_usuario', '$tiendas')");
			}
		}
	}	
}else{
	// No Logged
	$login_url = $ml->get_lucky(); // ;) (We love Daft Punk) https://youtu.be/5NV6Rdv1a3I
}


	if($user)
	{
		$mensaje = "Articulo guardado en tu usuario.";
	}else{
		$mensaje = "Articulo guardado en tu tel&eacute;fono.";
		$alerta = true;
	}
	
	
?>