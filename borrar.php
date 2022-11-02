<?php
    //conectar a base de datos con mysqli
    $conexion = new mysqli("cifpzonzamas.org", "institu3_neptuno", "institu3_neptuno", "institu3_neptuno");

    //comprobar conexión
    if ($conexion->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    $codigo = $_GET["codigo"];

    //consulta
    $consulta = "delete FROM clientes2 WHERE codigo='$codigo'";

    //ejecutar consulta
    $resultado = $conexion->query($consulta);


    $conexion->close();

    header('Location: prueba.php');

?>
