<?php
session_start();
if (!isset($_SESSION['usuario'])) {
header('Location: login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Panel Médico</title>
</head>
<body>
<h2>Panel Médico</h2>
<p>Bienvenido: <?php echo $_SESSION['usuario']; ?></p>
<a href="formulario.php">Nuevo formulario</a><br><br>
<a href="historial.php">Historial de pacientes</a><br><br>
<a href="logout.php">Cerrar sesión</a>
</body>
</html>