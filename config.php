<?php

	session_start();

	error_reporting(E_ALL & ~E_NOTICE);
	ini_set("display_errors", 1);

	define('SITE', 'http://ml.dev/');

	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_NAME', 'mla-hackaton');
	
	$mySQL = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	$mySQL->set_charset("utf8"); // :)
	
	require_once 'includes/ml/ml.php';
	require_once 'includes/model.php';
	require_once 'includes/user.php';	
	require_once 'includes/class.qrcode.php';
	require_once 'includes/functions.php';
	
	$ml = new ml();
	$ml->connect('8957934891232673', '00UXEk7pA4jD7RrvM7Ivv4qqb8XuVbYZ');
	//$ml->connect('3889811341676908', 'kA1XoFfkH7TXOdEq6qcjoEsclEYyECO7');
?>