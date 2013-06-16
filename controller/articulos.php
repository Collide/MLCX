<?php

	$shop = $ml->user( $_PAGE[0] );
	$articulos = $ml->user_items( $shop['id'], ($_POST['q'] ? $_POST['q'] : false) );
		
?>