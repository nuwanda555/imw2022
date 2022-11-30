<?php
// Conectamos con la base de datos
$conexion = new mysqli("cifpzonzamas.org", "institu3_neptuno", "institu3_neptuno", "institu3_neptuno");

$latitud=$_GET['latitud'];
$longitud=$_GET['longitud'];
$nombre=$_GET['nombre'];
$icono=$_GET['icono'];

//consulta
$consulta = "insert into ubicaciones (latitud,longitud,nombre,icono) values ('$latitud','$longitud','$nombre','$icono')";

//ejecutar consulta
$resultado = $conexion->query($consulta);

?>