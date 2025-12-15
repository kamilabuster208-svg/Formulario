<?php
include 'conexion.php';


if ($_POST) {
$usuario = $_POST['usuario'];
$password = $_POST['password'];


$sql = "INSERT INTO usuarios (usuario, password) VALUES ('$usuario', '$password')";
mysqli_query($conexion, $sql);
header('Location: login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Registro</title>
</head>
<body>
<h2>Registro</h2>
<form method="post">
<input type="text" name="usuario" placeholder="Usuario" required><br><br>
<input type="password" name="password" placeholder="Contraseña" required><br><br>
<button type="submit">Registrar</button>
</form>
<a href="login.php">Volver</a>
</body>
</html>