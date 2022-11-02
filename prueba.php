<style>
    .panel {
        display: flex;
        align-items: center;
        justify-content: center;
        min-width: 100%;
        border: 4px solid orange;
        border-radius: 20px;
        margin: 100px;
        padding: 20px;
    }


    table {
        margin: 150px;

    }
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" />
<script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>



<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<div class='panel'>

<a href="insertar_cliente.html" class="btn btn-primary">Insertar Cliente</a>

    <?php
    $nombre = "juana";


    //conectar a base de datos con mysqli
    $conexion = new mysqli("cifpzonzamas.org", "institu3_neptuno", "institu3_neptuno", "institu3_neptuno");

    //comprobar conexión
    if ($conexion->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }


    //codificacion utf8
    $conexion->set_charset("utf8");

    //consulta
    $consulta = "SELECT * FROM clientes2";

    //ejecutar consulta
    $resultado = $conexion->query($consulta);

    //comprobar si hay registros
    if ($resultado->num_rows > 0) {
        //imprimir registros
        $i = 1;
        echo "<table id='tabla_clientes' style='margin: 100px; padding: 100px;' class='table table-striped table-bordered'>";
        echo "<thead><tr><th>Código</th><th>Empresa</th><th>Borrar</th><th>Editar</th></tr></thead>";
        echo "<tbody>";
        while ($fila = $resultado->fetch_object()) {
            $i++;
            $ip = 23;
            $codigo = $fila->codigo;
            $empresa = $fila->empresa;
            $img = "<a class='link_borrar' href='borrar.php?codigo=$codigo'><img width='32px' src='https://cdn-icons-png.flaticon.com/512/1214/1214428.png'></a>";
            $imgEditar="<a class='link_editar' href='editar_cliente.php?codigo=$codigo'><img width='32px' src='https://iconarchive.com/download/i60504/custom-icon-design/pretty-office-9/edit-validated.ico'></a>";
            echo "<tr data-id='$codigo'><td >$codigo</td><td contenteditable>$empresa </td><td >$img</td><td >$imgEditar</td></tr>\n";
        }
        echo "</tbody></table>";
    } else {
        echo "No hay registros";
    }
?>
</div>


<script>
    $(document).ready(function() {

        $('#tabla_clientes').DataTable();

        $('.link_borrar').click(function(e) {
            e.preventDefault();
            const url= $(this).attr('href');
            Swal.fire({
                title: '¿Estás seguro que quieres borrar?',
                showDenyButton: true,
                confirmButtonText: 'Borrar',
                denyButtonText: `Cancelar`,
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    location.href=url;
                } else if (result.isDenied) {
                    return;
                }
            })

        });

    });
</script>






</body>

</html>