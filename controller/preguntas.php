<?php
	
	$articulo = $ml->item( $_PAGE[2] );
	$shop = $ml->user( $articulo['seller_id'] );
	$preguntas = $ml->item_comments( $_PAGE[2] );

?>