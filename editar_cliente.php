<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <style>
        .container{
            margin: 50px;
            padding: 50px;
            border: 3px solid lighblue;
            border-radius: 10px;
        }
    </style>

<?php
    $conexion = new mysqli("cifpzonzamas.org", "institu3_neptuno", "institu3_neptuno", "institu3_neptuno");

    $codigo=$_GET['codigo'];

    //consulta
    $consulta = "select codigo, empresa from clientes2 where codigo='$codigo'";

    //ejecutar consulta
    $resultado = $conexion->query($consulta);

    $registro = $resultado->fetch_object();

    $codigo = $registro->codigo;
    $empresa = $registro->empresa;


?>



</head>
<body>
    <div class="container">
        <form action="actualizar_cliente.php" method="POST">
            <div class="form-group">
                <label for="codigo">Código</label>
                <input type="text" name="codigo" id="codigo" class="form-control" value="<?php echo $codigo; ?>">
            </div>
            <!-- empresa-->
            <div class="form-group">
                <label for="empresa">Empresa</label>
                <input type="text" name="empresa" id="empresa" class="form-control"  value="<?php echo $empresa; ?>">
            </div>
            <!-- enviar y borrar -->
            <div class="form-group mb-3">
                <input type="submit" value="Enviar" class="btn btn-primary">
                <input type="reset" value="Borrar" class="btn btn-danger">
            </div>
        </form>
    </div>    

    </div>
</body>
</html>