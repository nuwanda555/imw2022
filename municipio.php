<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<?php

//Servidor-Base de datos-Usuario-Contraseña
$conexion = new mysqli("cifpzonzamas.org", "institu3_neptuno", "institu3_neptuno", "institu3_neptuno");
//comprobar conexión
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
//codificacion utf8
$conexion->set_charset("utf8");

$municipio = $_GET['municipio'];
//consulta
$consulta = "SELECT Codigo, Denominacion FROM centros WHERE Municipio='$municipio' ";

//ejecutar consulta
$resultado = $conexion->query($consulta);

echo "<table id='tabla_clientes' style='margin: 100px; padding: 100px;' class='table table-striped table-bordered'>";
echo "  <thead>
            <tr>   
                <th>codigo</th>
                <th>denominacion</th>
            </tr>
        </thead>";
echo "<tbody>";
while ($fila = $resultado->fetch_object()) {
    $codigo = $fila->Codigo;
    $denominacion = $fila->Denominacion;

    echo "<tr><td>$codigo</td><td>$denominacion</td></tr>";

}
echo "</tbody></table>";

?>