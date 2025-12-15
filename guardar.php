<?php
include 'conexion.php';


$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$diagnostico = $_POST['diagnostico'];
$observaciones = $_POST['observaciones'];


if ($edad <= 0) {
echo "Edad no válida";
exit();
}


$sql = "INSERT INTO formularios (nombre, edad, diagnostico, observaciones)
VALUES ('$nombre', '$edad', '$diagnostico', '$observaciones')";


mysqli_query($conexion, $sql);


header("Location: historial.php");
?>