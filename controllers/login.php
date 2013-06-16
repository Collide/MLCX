<?php
// Iniciamos oAuth.
global $ml;
global $mySQL;
$user_data = $ml->me();
//print_r($user_data);
if ($user_data) {
  // Logged
  //$user = json_decode($user, true);
 $user = $user_data['json'];
 $tokens = $user_data['token'];

$existe = $mySQL->query("SELECT id_usuario,nickname FROM usuarios WHERE nickname='$user[nickname]'");
if ($existe->num_rows > 0){
	// Si existe...
	$result = $existe->fetch_row();
	$_SESSION['id_usuario'] = $result[0];
	$_SESSION['nickname'] = $result[1];
}else{
	// No existe, creamos
	$insertamos = $mySQL->query("INSERT INTO usuarios (nickname,first_name,last_name,email,access_token,refresh_token,expires_token) VALUES ('$user[nickname]', '$user[first_name]', '$user[last_name]', '$user[email]', '$tokens[value]', '$tokens[refresh_token]', '$tokens[expires]')");
	$_SESSION['id_usuario'] = $mySQL->insert_id;
	$_SESSION['nickname'] = $user['nickname'];
}


}else{
	// No logged
	$login_url = $ml->get_lucky(); // ;) (We love Daft Punk) https://youtu.be/5NV6Rdv1a3I
	

}


if (!$user_data) {
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
//print_r($user);

?>