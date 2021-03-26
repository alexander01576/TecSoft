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

    <title>Registro de ventiladores</title>
</head>
<center>

    <body background=>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1">Administrador | Registro de ventiladores</span>
            </div>
        </nav>


        <div class="card-body" style="width: 30rem;">
            <form action="control_reg/reg_vent.php" method="POST">
                <h6>Ingresa los datos solicitados</h6>      
                <label>Id de ventilador</label><br>
                <?php
                require '../../conexion.php';
                $sqlCon = "SELECT  id_ventilador+1 as id FROM ventilador ORDER BY id_ventilador DESC LIMIT 1;";
                $resul = pg_query($conexion, $sqlCon);
                while ($mostrar = pg_fetch_array($resul)) {
                ?>
                <input required class="form-control" type="number" value="<?php echo $mostrar['id'] ?>" name="id_sensor"  placeholder="Id de ventilador" required alert="rellena el id de ventilador" />
                <?php
                }
                ?>
                <br>
                <label>Area de ubicacion</label><br>
                <input required class="form-control" type="text" name="area" placeholder="En que area esta ubicado" required alert="rellena la edad" />
                <br>
                <label>Fecha de instalacion</label><br>
                <input required class="form-control" type="date" name="fecha_instalacion" placeholder="privilegio" required alert="rellena el nivel de acceso" />
                <br>
                <br>
                <button type="submit" class="btn btn-primary">registrar</button>
            </form>
        </div>


        <footer class="bg-warning text-center text-lg-start">
            <br>
            <center>
                <button type="button" class="btn btn-link" href="index.html">
                    <a href="../../../admin.php" value="Ir">Inicio</a>
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