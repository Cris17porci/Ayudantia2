<html>
<head>
<title>Login</title>
</head>
<body>
<?php
$usuario="cisse";
$contrase�a="123";
$user=$_POST['user'];
$pass=$_POST['pass'];

if ($user!=$usuario)
{
echo "Usuario incorrecto";
}
elseif ($pass!=$contrase�a)
{
echo "Contrase�a incorrecta";
}
else
{
echo "<a href=\"DIRECCION DEL ENLACE\">Texto de enlace</a>";
}
?>
</body>
</html>