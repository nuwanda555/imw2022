<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" />
<script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>


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
$consulta = "SELECT Codigo, Denominacion,longitud,latitud FROM centros WHERE Municipio='$municipio' ";

//ejecutar consulta
$resultado = $conexion->query($consulta);


echo "<div class='container'>
        <table id='tabla_centros'  class='table table-striped table-bordered'>";
echo "  <thead>
            <tr>   
                <th>codigo</th>
                <th>denominacion</th>
                <th>Borrar</th>
                <th>Mapa</th>
            </tr>
        </thead>";
echo "<tbody>";
while ($fila = $resultado->fetch_object()) {
    $codigo = $fila->Codigo;
    $denominacion = $fila->Denominacion;
    $longitud = $fila->longitud;
    $latitud = $fila->latitud;
    $linkBorrar = "<a class='link_borrar' href='borrar_centros.php?codigo=$codigo&municipio=$municipio'><img width='32px' src='https://cdn-icons-png.flaticon.com/512/1214/1214428.png'></a>";
    // Al pinchar en un icono de un mapa  mostrar un mapa de Nokia Here con la ubicación del centro
    $linkMapa = "<a class='link_mapa' href='https://www.here.com/?map=$latitud,$longitud,15,normal&fb_locale=es_ES'><img width='32px' src='https://cdn-icons-png.flaticon.com/512/1214/1214428.png'></a>";

    //$linkMapa = "<a class='link_mapa' href='https://www.here.com/?map=$latitud,$longitud,15,normal&fb_locale=es_ES'><img width='32px' src='https://cdn-icons-png.flaticon.com/512/1214/1214428.png'></a>";
    //$linkMapa = "<a class='link_mapa' href='https://www.bing.com/maps?cp=$latitud~$longitud&lvl=15&style=r&sp=point.$latitud/$longitud'><img width='32px' src='https://cdn-icons-png.flaticon.com/512/1214/1214428.png'></a>";
    //$linkMapa = "<a class='link_mapa' href='https://www.google.com/maps/search/?api=1&query=$latitud,$longitud'>Mapa</a>";

    // https://www.openstreetmap.org/#map=18/37.17778/-3.59861
    //$linkMapa = "<a class='link_mapa' href=https://www.openstreetmap.org/#map=18/$latitud/$longitud'>Mapa</a>";

    echo "<tr><td>$codigo</td><td>$denominacion</td><td>$linkBorrar</td><td>$linkMapa</td></tr>";

}
echo "</tbody></table></div>";

?>

<script>
    $(document).ready(function() {

        $('#tabla_centros').DataTable({
        //Sin paginación
        "paging": false,
        
        "columnDefs": [
          { "orderable": false, "targets": 0 },//ocultar para columna 1
        ],
    });


    });
</script>