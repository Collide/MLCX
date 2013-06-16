<?php

	$user = $ml->me();
	
	$id_usuario = $user['nickname'];
	

	$usuario = $mySQL->query("SELECT * FROM usuarios WHERE nickname='$id_usuario'");
	$_user =$usuario->fetch_row();
	
		
		
	$consulta_items = $mySQL->query("SELECT * FROM favoritos_tiendas WHERE id_usuario='". $_user[0] ."'");
	
	$r = array();
	
	while($row = $consulta_items->fetch_array())
	{
		
		
		$item = array();
		$item = $ml->user($row['id_tienda']);
		
		$r[] = $item;
	}
	
	
	
	
	
?>