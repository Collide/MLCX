<?php

	include 'ml.php';
	
	$ml = new ml();
	$ml->connect('8957934891232673', '00UXEk7pA4jD7RrvM7Ivv4qqb8XuVbYZ');
	
	
	
	$r = $ml->user_reputation("KROMO_S1");
	print_r($r);
	
	
	
	
?>