<?php
require '../../conexion.php';

$id_reporte = $_POST['id_reportea'];

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

    <title>Registro de mentenimientos</title>
</head>
<center>

    <body background=>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1">Administrador | Actualizacion de reporte </span>
            </div>
        </nav>

        <?php
        $sqlCon = "select * from reporte where id_reporte = $id_reporte;";
        $resul = pg_query($conexion, $sqlCon);
        while ($mostrar = pg_fetch_array($resul)) {
        ?>

            <div class="card-body" style="width: 30rem;">
                <form action="ctrl/updt_repo.php" method="POST" name="formDatosPersonas">
                    <input type="hidden" name="idSend" value="<?php echo $id_reporte ?>">

                    <label>ID reporte:</label><br>
                    <input class="form-control" type="number" name="id_reporte" value="<?php echo $mostrar['id_reporte'] ?>" placeholder="ID Persona" required alert="rellena el id Persona" />
                    <br>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Persona que reporta</label>
                        </div>
                        <select class="custom-select form-control" id="inputGroupSelect01" name="id_peso_repo">
                            <?php
                            $sqlCon = "select * from reporte where id_reporte = $id_reporte;";
                            $resul = pg_query($conexion, $sqlCon);
                            while ($mostrar2 = pg_fetch_array($resul)) {
                                $id = $mostrar2['id_reporte'];
                                echo '<option value="' . $id . '">' . $mostrar2['id_persona_reporte'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <br>
                    <label>Fecha reporte</label><br>
                    <?php $fecha = date("Y/m/d"); ?>
                    <input class="form-control" type="date" value="<?php echo $mostrar['fecha_reporte'] ?>" name="fecha_repor" required alert="rellena la fecha de reporte" required min="<?php echo $fecha; ?>" />
                    <br>
                    <label>Reporte</label><br>
                    <textarea class="form-control" name="reporte" placeholder="Ingresa tu el reporte" required alert="rellena el nivel de acceso" required><?php echo $mostrar['reporte'] ?></textarea>
                    <br>
                    <br>
                    <button type="submit" class="btn btn-primary">Acualizar</button>
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