<?php
//Servidor-Base de datos-Usuario-Contraseña
$conexion = new mysqli("cifpzonzamas.org", "institu3_neptuno", "institu3_neptuno", "institu3_neptuno");
//comprobar conexión
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
//codificacion utf8
$conexion->set_charset("utf8");
//consulta
$consulta = "SELECT DISTINCT Municipio FROM centros ORDER BY Municipio";

//ejecutar consulta
$resultado = $conexion->query($consulta);


echo "<form action='centros.php' >";
echo '<label for="municipios">Elige un municipio:</label>';
echo '<select name="municipio" >';
while ($fila = $resultado->fetch_object()) {
    $municipio = $fila->Municipio;
    echo "<option value=\"$municipio\"> $municipio</option>";
}
echo '</select>';
echo "<button type='submit'>Enviar</button>";
echo "<form>";
?>