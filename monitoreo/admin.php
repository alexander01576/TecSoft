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

  <title>Menu administrador</title>
</head>
<center>

  <body background="img/fondo.jpg">
    <nav class="navbar navbar-dark bg-dark">
      <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">Administrador</span>
      </div>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Menu</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">

            <!--personas -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Personas
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="control/crud_admin/reg/reg_per.php">Registro</a></li>
                <li><a class="dropdown-item" href="control/crud_admin/cons/consul_per.php">gestion</a></li>
              </ul>

              <!--reportes -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Reportes
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="control/crud_admin/reg/reg_repo.php">Registro</a></li>
                <li><a class="dropdown-item" href="control/crud_admin/cons/consul_repo.php">gestion</a></li>
              </ul>


              <!--ventiladores -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Ventiladores
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="control/crud_admin/reg/reg_vent.php">Registro</a></li>
                <li><a class="dropdown-item" href="control/crud_admin/cons/consul_vent.php">gestion</a></li>
              </ul>


              <!--sensores -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Sensores
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="control/crud_admin/reg/reg_senso.php">Registro</a></li>
                <li><a class="dropdown-item" href="control/crud_admin/cons/consul_sensor.php">gestion</a></li>
              </ul>

              <!--mentenimientos -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Mantenimientos
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="control/crud_admin/reg/reg_mante.php">Registro</a></li>
                <li><a class="dropdown-item" href="control/crud_admin/cons/consul_mante.php">gestion</a></li>
              </ul>

              <!--temperatura -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Temperaturas
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="control/crud_admin/cons/consul_datos.php">Datos</a></li>
              </ul>


              <!--personal mantemimiento -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Personal de mantenimiento
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="control/crud_admin/reg/reg_perso_mante.php">Registro</a></li>
                <li><a class="dropdown-item" href="control/crud_admin/cons/consul_per_mantenimiento.php">gestion</a></li>
              </ul>
          </ul>
        </div>
      </div>
    </nav>





    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <footer class="bg-warning text-center text-lg-start">


      <br>
      <center>
        <button type="button" class="btn btn-primary" href="index.html">
          <a href="index.html" value="Ir">Inicio</a>
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