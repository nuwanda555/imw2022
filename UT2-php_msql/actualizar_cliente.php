<?php

    //conectar a base de datos con mysqli
    $conexion = new mysqli("cifpzonzamas.org", "institu3_neptuno", "institu3_neptuno", "institu3_neptuno");

    //comprobar conexión
    if ($conexion->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    $id=$_POST['id'];
    $codigo=$_POST['codigo'];
    $empresa=$_POST['empresa'];


   //consulta
    $consulta = "update clientes2 set codigo='$codigo', empresa='$empresa' where id=$id";

    //ejecutar consulta
    $resultado = $conexion->query($consulta);

    //redirecionar a prueba.php
    header("Location: clientes.php");
?>