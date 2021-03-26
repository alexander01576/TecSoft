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

    <title>Registro de personal</title>
</head>
<center>

    <body background=>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1">Administrador | Registro de personal</span>
            </div>
        </nav>

        <div class="card-body" style="width: 30rem;">
            <form action="control_reg/reg_per.php" method="POST">

                <?php
                require '../../conexion.php';
                $sqlCon = "SELECT  id_persona+1 as id FROM persona ORDER BY id_persona DESC LIMIT 1;";
                $resul = pg_query($conexion, $sqlCon);
                while ($mostrar = pg_fetch_array($resul)) {
                ?>
                    <label>ID Persona:</label><br>
                    <input class="form-control" type="number" name="id_persona" value="<?php echo $mostrar['id'] ?>" placeholder="ID Persona" required alert="rellena el id Persona" />
                <?php
                }
                ?>
                <br>
                <label>correo:</label><br>
                <input class="form-control" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name="correo" placeholder="correo" required alert="rellena el correo" />
                <br>
                <label>clave:</label><br>
                <input class="form-control" type="text"  name="clave" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Debe contener al menos un número y una letra mayúscula y minúscula, y al menos 8 o más caracteres" placeholder="contraseña" required alert="rellena el modelo" />
                <br>
                <label>Nombre:</label><br>
                <input class="form-control" type="text" name="nombre" placeholder="nombre" required alert="rellena el nombre" />
                <br>
                <label>Apellido paterno:</label><br>
                <input class="form-control" type="text" name="ap_pat" placeholder="Apellido Paterno" required alert="rellena el apellido paterno" />
                <br>
                <label>Apellido naterno:</label><br>
                <input class="form-control" type="text" name="ap_mat" placeholder="apellido Materno" required alert="rellena el apellido materno" />
                <br>
                <label>Edad</label><br>
                <input class="form-control" type="text" name="edad" placeholder="edad" required alert="rellena la edad" />
                <br>
                <label>Nivel de acceso</label><br>
                <h6>Para usuario normal 0 y para Administracion 1 </h6>
                <input class="form-control" type="number" name="privilegio" placeholder="privilegio" required alert="rellena el nivel de acceso" />
                <br>
                <br>
                <button type="submit" class="btn btn-primary">registrar</button>
            </form>
        </div>
        <br>


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