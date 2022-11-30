<?php
// Conectamos con la base de datos
$conexion = new mysqli("cifpzonzamas.org", "institu3_neptuno", "institu3_neptuno", "institu3_neptuno");

$nombre=$_GET['nombre'];


//consulta
$consulta = "select * from ubicaciones where nombre='$nombre'";

//ejecutar consulta
$resultado = $conexion->query($consulta);

//devolver todos los resultados en formato json
echo json_encode($resultado->fetch_all(MYSQLI_ASSOC));


?>