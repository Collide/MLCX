<?php
global $ml;
$id_articulo = $_GET['articulo'];
$arrayArticulo = $ml->item($id_articulo);
$id_vendedor = $arrayArticulo['seller_id'];
$arrayUsuario = $ml->user($id_vendedor);


	// Cargamos el theme.
	$smarty = new Smarty_MLA;
	$smarty->assign('arrayUsuario', $arrayUsuario);
	$smarty->assign('arrayArticulo', $arrayArticulo);
	$smarty->display('articulo.php');

?>