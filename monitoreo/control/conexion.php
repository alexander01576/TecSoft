<?php
//datos de conexion
$conn_string = "host=localhost port=5432 dbname=monitoreo user=postgres password=123 options='--client_encoding=UTF8'";

// establecemos una conexion con el servidor postgresSQL
$conexion = pg_connect($conn_string);

?>