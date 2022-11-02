<?php

    //conectar a base de datos con mysqli
    $conexion = new mysqli("cifpzonzamas.org", "institu3_neptuno", "institu3_neptuno", "institu3_neptuno");

    //comprobar conexión
    if ($conexion->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    $codigo=$_POST['codigo'];
    $empresa=$_POST['empresa'];


   //consulta
    $consulta = "insert into clientes2 (codigo, empresa) values ('$codigo', '$empresa')";

    //ejecutar consulta
    $resultado = $conexion->query($consulta);

    //redirecionar a prueba.php
    header("Location: prueba.php");
?>
