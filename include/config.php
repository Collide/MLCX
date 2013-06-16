<?php
// VERSIONS
	define('version','0.1 Hackaton');
// NOMBRES
	define('NOMBRE_SITIO', 'MLA-Hackaton');	
// MYSQL
	$mySQL = new mysqli('localhost', 'root', '', 'mla-hackaton');
	$mySQL->set_charset("utf8"); // :)
	// Tablas
	$tabla = array('data' => 'in_data', 'historial' => 'in_historial', 'logs' => 'in_logs', 'productos' => 'in_productos', 'sucursales' => 'in_sucursales', 'usuarios' => 'in_usuarios', 'ventas' => 'in_ventas');
// Directorios
	define('RUTA',$_SERVER['DOCUMENT_ROOT']);
	define('WWW','http://ml.dev');
	define('RUTA_THEME', RUTA . 'template/');
	define('RUTA_INCLUDE', RUTA . 'include/');
	define('RUTA_CONTROLLERS', RUTA . 'controllers/');
// Configurar PHP
	ini_set('default_charset', 'UTF-8');
	// Clases
	require_once RUTA . 'include/functions.php';
	require_once RUTA . 'include/class.qrcode.php';
	require_once RUTA . 'include/API/ml.php';
	require_once RUTA . 'include/smarty/Smarty.class.php';
	require_once RUTA . 'include/smarty/setup.php';


// Configuramos MeLi
    $ml = new ml();
	$ml->connect('8957934891232673', '00UXEk7pA4jD7RrvM7Ivv4qqb8XuVbYZ');
	
?>