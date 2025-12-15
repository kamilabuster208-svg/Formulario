<?php
session_start();
include 'conexion.php';


if ($_POST) {
$usuario = $_POST['usuario'];
$password = $_POST['password'];


$sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND password='$password'";
$resultado = mysqli_query($conexion, $sql);


if (mysqli_num_rows($resultado) == 1) {
$_SESSION['usuario'] = $usuario;
header('Location: index.php');
} else {
echo "<p style='color:red'>Usuario o contraseña incorrectos</p>";
}
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Login</title>
</head>
<body>
<h2>Iniciar sesión</h2>
<form method="post">
<input type="text" name="usuario" placeholder="Usuario" required><br><br>
<input type="password" name="password" placeholder="Contraseña" required><br><br>
<button type="submit">Entrar</button>
</form>
<a href="register.php">Registrarse</a>
</body>
</html>