<style>

    body {
        background-color: #f5f5f5;
    }
    .panel {
        display: flex;
        align-items: center;
        justify-content: center;
        min-width: 100%;
        border-radius: 20px;
        z-index: -2;
    }


    table {
        margin: 120px;
        text-align: center;

    }

    .insertarBTN{
        position: absolute;
        top: 50px;


    }


</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>




<div class='panel'>

<a href="insertar_cliente.html" class='insertarBTN'>Insertar Cliente</a>

<?php

//Conectar con la base de datos

$conexion = new mysqli("cifpzonzamas.org", "institu3_neptuno", "institu3_neptuno", "institu3_neptuno");
$conexion->set_charset("utf8");

//Comprobar la conexión

if ($conexion->connect_errno) {

echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;

}

//consulta

$consulta = "SELECT * FROM clientes2";


//ejecutar consulta
$resultado = $conexion->query($consulta);


// Mostrar los resultados en una tabla




echo "<table class='table' style='width: 100%;'>"; // Abrir tabla
echo "<tr>"; // Abrir fila
echo "<th>Id</th>"; // Añadir columna
echo "<th>Codigo</th>"; // Añadir columna
echo "<th>Empresa</th>"; // Añadir columna
echo "<th>Editar</th>"; // Añadir columna
echo "<th>Borrar</th>"; // Añadir columna
echo "</tr>"; // Cerrar fila

while ($fila = $resultado->fetch_object()) {
   
$codigo = $fila->codigo;
$empresa = $fila->empresa;
$id = $fila->id;

echo "<tr>";
echo "<td>" . $id . "</td>";
echo "<td>" . $codigo . "</td>";
echo "<td>" . $empresa . "</td>";
echo "<td><a class='link_editar' href='editar.php?id=$id'><button type='button' class='btn btn-warning'>Editar</button></a></td>";
echo "<td><a class='link_borrar' href='borrar.php?id=$id'><button type='button' class='btn btn-danger'>Borrar</button></a></td>";
echo "</tr>";

}

echo "</table>";

// Liberar resultados

$resultado->free();

// Cerrar conexión

$conexion->close();

?>
</div>