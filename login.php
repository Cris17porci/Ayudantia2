<html>
<head>
<title>Login</title>
</head>
<body>
<?php
$usuario="cisse";
$contraseņa="123";
$user=$_POST['user'];
$pass=$_POST['pass'];

if ($user!=$usuario)
{
echo "Usuario incorrecto";
}
elseif ($pass!=$contraseņa)
{
echo "Contraseņa incorrecta";
}
else
{
echo "<a href=\"DIRECCION DEL ENLACE\">Texto de enlace</a>";
}
?>
</body>
</html>