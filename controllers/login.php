<?php
// Iniciamos oAuth.
global $ml;
global $mySQL;
$user = $ml->me();
if ($user) {
  // Logged
  //$user = json_decode($user, true);

// $mySQL->query("INSERT INTO usuarios (nickname,first_name,last_name,email,access_token,refresh_token) VALUES ('$user[nickname]', '$user[first_name]', '$user[last_name]', '$user[email]', '$access_token', '$refresh_token')");


}else{
	// No logged
	$login_url = $ml->get_lucky(); // ;) (We love Daft Punk) https://youtu.be/5NV6Rdv1a3I
	

}


if (!$user) {
	// Cargamos el theme.
	$smarty = new Smarty_MLA;
	$smarty->assign('login_url', $login_url);
	$smarty->assign('logout_url', $logout_url);
	$smarty->display('login.tpl');
	echo "<br>No logged";
}else{
	echo "<br>Logged";

	//redirect('/?url=crear_qr&tienda=' . $tienda);

}
echo "<pre>";
print_r($user);
?>