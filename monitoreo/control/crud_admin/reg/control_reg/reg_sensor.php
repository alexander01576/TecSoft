<?php
require '../../../conexion.php';

$id_sensor = $_POST['id_sensor'];
$area = $_POST['area'];
$fecha_instalacion = $_POST['fecha_instalacion'];

$sql = "insert into sensor values ($id_sensor, '$area', '$fecha_instalacion');";
if (pg_query($conexion, $sql)) {
    echo '<script language="javascript">alert("Datos registrados, mostrando registros");window.location.href="../../cons/consul_sensor.php"</script>';
} else {
      echo "Error: " . $sql . "<br>" . pg_last_error($conexion);
}
pg_close($conexion);
?>