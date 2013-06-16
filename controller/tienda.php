<?php

	if( $_POST['q'] )
	{
		
		$user = $ml->user( $_POST['q'] );
		
		if( $user['id'] )
		{
			header('Location: /'. $user['username']);
			die();
		}
		
	}
	
	header('Location: /home');

?>