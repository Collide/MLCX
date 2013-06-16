<?php
	

	
	$shop = $ml->me();
	
	
	if(!$shop)
	{
			$login_url = $ml->get_lucky(); // ;) (We love Daft Punk) https://youtu.be/5NV6Rdv1a3I
	}
	
	
	$url = SITE .$shop['nickname'];

	$qr = new qrcode();
	$qr->link($url);
	
	$image =  $qr->get_link();

	
?>