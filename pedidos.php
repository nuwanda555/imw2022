<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" />
<script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>




<?php
    //conectar a base de datos con mysqli
    $conexion = new mysqli("cifpzonzamas.org", "institu3_neptuno", "institu3_neptuno", "institu3_neptuno");

    //comprobar conexión
    if ($conexion->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    $clienteId = $_GET["cliente_id"];

    //consulta
    $consulta = "select * from pedidos where cliente_id='$clienteId'";

    //ejecutar consulta
    $resultado = $conexion->query($consulta);


    if ($resultado->num_rows > 0) {
        //imprimir registros
        $i = 1;
        echo "<table id='tabla_pedidos' style='margin: 100px; padding: 100px;' class='table table-striped table-bordered'>";
        echo "<thead><tr><th>Fecha pedido</th><th>Cargo</th><th>Destinatario</th></tr></thead>";
        echo "<tbody>";
        while ($registro = $resultado->fetch_object()) {

            echo "<tr><td>$registro->fecha_pedido</td><td >$registro->cargo</td><td>$registro->destinatario</td></td></tr>\n";
        }
        echo "</tbody></table>";
    } else {
        echo "No hay registros";
    }



?>
