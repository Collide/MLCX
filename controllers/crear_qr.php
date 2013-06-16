<?php
// Ejemplos de uso: http://www.phpclasses.org/browse/file/32322.html
$tienda = $_GET['tienda'];
$qr = new qrcode(); 
$qr->link(WWW . "/qr.php?tienda=".$tienda);
echo "<img width='500' src='".$qr->get_link()."' border='0'/>"; 
echo "<br>URL CORTA: http://urlcor.ta/A3290";
echo "<br>Encontranos en ML" .$tienda;
?>