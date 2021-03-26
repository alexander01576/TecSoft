<?php
require '../../conexion.php';

$id_mante = $_POST['id_mante'];

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
                <span class="navbar-brand mb-0 h1">Administrador | Actulizacion de mantenimientos</span>
            </div>
        </nav>

        <?php
        $sqlCon = "select * from mantenimiento where id_mantenimiento = $id_mante;";
        $resul = pg_query($conexion, $sqlCon);
        while ($mostrar = pg_fetch_array($resul)) {
        ?>

            <div class="card-body" style="width: 30rem;">
                <form action="ctrl/updt_mante.php" method="POST">
                
                <input type="hidden" name="idSend" value="<?php echo $id_mante ?>">
                    <h6>Ingresa los datos solicitados</h6>
                    <label>Numero de Mantenimiento</label><br>
                    <input class="form-control" type="number" name="id_mantenimiento" value="<?php echo $mostrar['id_mantenimiento'] ?>" placeholder="ID reporte" required alert="rellena el id de reporte" />
                    <br>
                    <br>
                    <label>Fecha de realizacion del mantenimiento</label><br>
                    <input class="form-control" type="date" name="fecha_mantenimiento" value="<?php echo $mostrar['fecha_matenimiento'] ?>" alert="rellena la fecha de reporte" required />
                    <br>
                    <br>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <label class="input-group-text"  for="inputGroupSelect01">Persona que dio el mantenimiento</label>
                        </div>
                        <select class="custom-select form-control" required id="inputGroupSelect01" name="id_perso_mante">
                            <option value="0">Seleccione:</option>
                            <?php
                            $sqlCon = "select * from persona_mantenimiento;";
                            $resul = pg_query($conexion, $sqlCon);
                            while ($mostrar1 = pg_fetch_array($resul)) {
                                $id = $mostrar1['id_persona_mantenimiento'];
                                echo '<option value="' . $id . '">'. $mostrar1['nombre'] . ' ' .  $mostrar1['ap_pat'] . ' ' .  $mostrar1['ap_mat'] . '</option>';
                            }
                            ?>

                        </select>
                    </div>
                    <br>
                    <label>Precio del mantenimiento</label><br>
                    <input class="form-control" type="number" value="<?php echo $mostrar['precio_mantenimiento'] ?>" name="precio" required alert="rellena la fecha de reporte"  />
                    <br>
                    <br>
                    <button type="submit" class="btn btn-primary">actualizar</button>

                </form>
            </div>
        <?php
        }
        ?>
        <footer class="bg-warning text-center text-lg-start">


            <br>
            <center>
                <button type="button" class="btn btn-primary" href="index.html">
                    salir
                </button>
            </center>
            <br>
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2020 Copyright:
            </div>
        </footer>

    </body>
</center>

</html>