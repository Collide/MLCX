<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h1>Crear codigo QR para tu tienda</h1>
	<a href="{$login_url}">Login con MercadoLibre</a> -
	<a href="{$url}/?url=login&meli-logout">Salir</a>
	<br>------------------------------------------------------<br>

	{$smarty.session.user.first_name}
	{$smarty.session.user.last_name}
	{$smarty.session.user.nickname}
</body>
</body>
</html>