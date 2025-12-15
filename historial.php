<?php
include 'conexion.php';
$resultado = mysqli_query($conexion, "SELECT * FROM formularios");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Historial</title>
</head>
<body>
<h2>Historial de Pacientes</h2>
<table border="1" cellpadding="5">
<tr><th>Nombre</th><th>Edad</th><th>Diagnóstico</th></tr>
<?php
while ($fila = mysqli_fetch_assoc($resultado)) {
echo "<tr>";
echo "<td>{$fila['nombre']}</td>";
echo "<td>{$fila['edad']}</td>";
echo "<td>{$fila['diagnostico']}</td>";
echo "</tr>";
}
?>
</table>
<a href="index.php">Volver</a>
</body>
</html>