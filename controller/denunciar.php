<?php
	
	if($_PAGE[2])
	{
		$articulo = $ml->item( $_PAGE[2] );
		$shop = $ml->user( $articulo['seller_id'] );
	}
	else
	{
		$shop = $ml->user( $_PAGE[0] );
	}
?>