<?php
require '../../../conexion.php';

$id_sensor = $_POST['id_sensor'];
$area = $_POST['area'];
$fecha_insttalacion = $_POST['fecha_instalacion'];

$sql = "insert into ventilador values ($id_sensor, '$area', '$fecha_insttalacion');";
if (pg_query($conexion, $sql    )) {
    echo '<script language="javascript">alert("Datos registrados, mostrando registros");window.location.href="../../cons/consul_vent.php"</script>';
} else {
      echo "Error: " . $sql . "<br>" . pg_last_error($conexion);
}
pg_close($conexion);
?>