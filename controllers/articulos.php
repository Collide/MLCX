<?php
global $ml;
$id_vendedor = $_GET['vendedor'];
$arrayUsuario = $ml->user($id_vendedor);

$arrayArticulos = $ml->user_items($id_vendedor);


	// Cargamos el theme.
	$smarty = new Smarty_MLA;
	$smarty->assign('arrayUsuario', $arrayUsuario);
	$smarty->assign('arrayArticulos', $arrayArticulos);
	$smarty->display('articulos.php');

?>