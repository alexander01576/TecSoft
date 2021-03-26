<?php
require '../../conexion.php';
$id_sensor = $_POST['id_sensor'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="css/menu2.css" />

    <title>Actualizacion de sensores</title>
</head>
<center>

    <body background=>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1">Administrador | Actualizacion de sensores </span>
            </div>
        </nav>

        <?php
        $sqlCon = "select * from sensor where id_sensor = $id_sensor;";
        $resul = pg_query($conexion, $sqlCon);
        while ($mostrar = pg_fetch_array($resul)) {
        ?>

            <div class="card-body" style="width: 30rem;">
                <form action="ctrl/updt_sensor.php" method="POST" name="formDatosPersonas">
                    <input type="hidden" name="idSend" value="<?php echo $id_sensor ?>">

                    <h6>Ingresa los datos solicitados</h6>
                    <label>Id de ventilador</label><br>
                    <input required class="form-control" type="number" name="id_sensor" value="<?php echo $mostrar['id_sensor'] ?>" placeholder="Id de ventilador" required alert="rellena el id de ventilador" />
                    <br>
                    <label>Area de ubicacion</label><br>
                    <input required class="form-control" type="text" name="area" placeholder="En que area esta ubicado" required alert="rellena la edad"  value="<?php echo $mostrar['area'] ?>"/>
                    <br>
                    <label>Fecha de instalacion</label><br>
                    <input required class="form-control" type="date" name="fecha_instalacion" placeholder="privilegio" required alert="rellena el nivel de acceso"  value="<?php echo $mostrar['fecha_instalacion'] ?>"/>
                    <br>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    <br><br>
                </form>
            </div>
        <?php
        }
        ?>

        <footer class="bg-warning text-center text-lg-start">


            <br>
            <center>
                <button type="button" class="btn btn-primary" href="../../../admin.php">
                    salir
                </button>
                <a href="../../../admin.php" type="button" value="Ir"></a>
            </center>
            <br>
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2020 Copyright:
            </div>
        </footer>

    </body>
</center>

</html>