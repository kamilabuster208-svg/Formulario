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
<title>Formulario Médico</title>
</head>
<body>
<h2>Formulario Médico</h2>
<form action="guardar.php" method="post">
<input type="text" name="nombre" placeholder="Nombre del paciente" required><br><br>
<input type="number" name="edad" placeholder="Edad" required><br><br>
<input type="text" name="diagnostico" placeholder="Diagnóstico" required><br><br>
<textarea name="observaciones" placeholder="Observaciones"></textarea><br><br>
<button type="submit">Guardar</button>
</form>
<a href="index.php">Volver</a>
</body>
</html>