<?php

	$user = $ml->me();

	$id_usuario = $user['id'];
	$consulta_items = $mySQL->query("SELECT * FROM favoritos_items WHERE id_usuario='$id_usuario'");
	
	$r = array();
	
	foreach( $consulta_items->fetcha_array() as $item )
	{
		
		print_r($item);
		//$r[] = $ml->item( $item['id_articulo'] );
	}
	
	
	
?>