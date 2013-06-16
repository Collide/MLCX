<?php
$estadisticas['useragent'] = $_SERVER['HTTP_USER_AGENT'];
$estadisticas['tienda'] = $_GET['tienda'];
$estadisticas['fecha'] = time();
$estadisticas['accion'] = 1;
echo "<pre>";
print_r($estadisticas);
?>