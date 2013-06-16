<?php
	
	require_once 'config.php';

	$_PAGE = explode('/', $_GET['p']);
	
	switch( $_PAGE[0] )
	{
		case 'home':
			$_TEMPLATE = 'home';
			break;
			
		default:
			$_TEMPLATE = $_PAGE[0];
			
			if(!$_TEMPLATE){ $_TEMPLATE = 'home'; }			
			
			break;
						
	}
	
	$_PATH_T = 'template/'.$_TEMPLATE.'.php';
	$_PATH_C = 'controller/'.$_TEMPLATE.'.php';

	
	if( file_exists($_PATH_C) )
	{
		
		require_once $_PATH_C;
		require_once $_PATH_T;
		
		die();
	}
	else
	{
		
		
		switch( $_PAGE[1] )
		{
			case 'articulos':
			case 'reputacion':
			case 'denunciar':
			case 'guardar':
			case 'newsletter_ok':
				$_TEMPLATE = $_PAGE[1];
				break;
				
			case 'item':
				
				
				switch( $_PAGE[3] )
				{
					case 'descripcion':
					case 'denunciar':
					case 'denunciar_ok':
					case 'guardar':
					case 'preguntas':
						
						$_TEMPLATE = $_PAGE[3];
						
						break;
						
					default:
						$_TEMPLATE = $_PAGE[1];
						break;
				}
				
				
				break;
				
			default:
				$_TEMPLATE = 'shop';
				break;
		}
		
		
	
		require_once 'controller/'.$_TEMPLATE.'.php';
		require_once 'template/'.$_TEMPLATE.'.php';
		
		
		
	}
?>