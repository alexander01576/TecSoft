<?php
require '../../conexion.php';

$id_per = $_POST['id_per'];

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

    <title>Actualizacion de personal de mentenimientos</title>
</head>
<center>

    <body background=>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1">Administrador | Actualizacion de personal de mantenimiento </span>
            </div>
        </nav>

        <?php
        $sqlCon = "select * from persona_mantenimiento where id_persona_mantenimiento = $id_per;";
        $resul = pg_query($conexion, $sqlCon);
        while ($mostrar = pg_fetch_array($resul)) {
        ?>

        <div class="card-body" style="width: 30rem;">
            <form action="ctrl/updt_per_mante.php" method="POST" name="formDatosPersonas">
                <input type="hidden" name="idSend" value="<?php echo $id_per ?>">
                <label>ID Persona de mantenimiento:</label><br>
                <input class="form-control" type="number" name="id_persona_mantenimiento" value="<?php echo $mostrar['id_persona_mantenimiento'] ?>" placeholder="ID Persona" required alert="rellena el id Persona" />
                <br>
                <label>Nombre:</label><br>
                <input class="form-control" type="text" name="nombre" value="<?php echo $mostrar['nombre'] ?>" placeholder="nombre" required alert="rellena el nombre" />
                <br>
                <label>Apellido paterno:</label><br>
                <input class="form-control" type="text" name="ap_pat" value="<?php echo $mostrar['ap_pat'] ?>" placeholder="Apellido Paterno" required alert="rellena el apellido paterno" />
                <br>
                <label>Apellido naterno:</label><br>
                <input class="form-control" type="text" name="ap_mat" value="<?php echo $mostrar['ap_mat'] ?>" placeholder="apellido Materno" required alert="rellena el apellido materno" />
                <br>
                <label>Edad</label><br>
                <input class="form-control"  type="text" name="edad" value="<?php echo $mostrar['edad'] ?>" placeholder="edad" required alert="rellena la edad" />
                <br>
                <label>Empresa de mantenimiento</label><br>
                <input class="form-control" type="text" name="empresa" value="<?php echo $mostrar['empresa_de_mantenimiento'] ?>" placeholder="privilegio" required alert="rellena el campo de empresa" />
                <br><br>
                <button type="submit" class="btn btn-primary">actualizar</button>
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