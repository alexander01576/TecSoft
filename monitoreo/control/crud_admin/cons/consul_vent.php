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

    <title>Datos de ventiladores</title>
</head>

    <body>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1">Administrador | Gestion de ventiladores registrados</span>
            </div>
        </nav>

        <br>

        <table class="table table-striped table-sm">
        <thead class="thead-dark">
            <tr>
                <td>ID ventilador</td>
                <td>Area de instalacion</td>
                <td>fecha de instalacion</td>
                <td>Eliminacion</td>
                <td>Actulizacion</td>
            </tr>
        </thead>
            <?php
            require '../../conexion.php';
            $sqlCon = "select * from ventilador order by id_ventilador asc";
            $resul = pg_query($conexion, $sqlCon);
            while ($mostrar = pg_fetch_array($resul)) {

                $id_vent = $mostrar['id_ventilador'];
            ?>

                <tr>
                    <td><?php echo $mostrar['id_ventilador'] ?></td>
                    <td><?php echo $mostrar['area'] ?></td>
                    <td><?php echo $mostrar['fecha_instalacion'] ?></td>
                    <td>
                        <form action="../elim/elim_vent.php" method="POST">
                            <input type="hidden" name="id_ventilador" value=<?php echo $id_vent ?>>
                            <button type="submit" class="btn btn-danger">eliminar</button>
                        </form>
                    </td>
                    <td>
                        <form action="../actu/actu_vent.php" method="POST">
                            <input type="hidden" name="id_ventilador" value=<?php echo $id_vent ?>>
                            <button type="submit" class="btn btn-warning" >actulizar</button>
                        </form>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>

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

</html>