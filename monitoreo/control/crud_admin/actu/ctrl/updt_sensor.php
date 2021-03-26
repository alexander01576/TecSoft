<?php
require '../../../conexion.php';


$id_send = $_POST['idSend'];
$id_sensor = $_POST['id_sensor'];
$area = $_POST['area'];
$fecha_instalacion = $_POST['fecha_instalacion'];

$sql = "UPDATE sensor SET id_sensor='$id_sensor', area='$area', fecha_instalacion='$fecha_instalacion' WHERE id_sensor = $id_send;";
if (pg_query($conexion, $sql)) {
    echo '<script language="javascript">alert("Datos Actualizados, mostrando registros");window.location.href="../../cons/consul_sensor.php"</script>';
} else {
      echo "Error: " . $sql . "<br>" . pg_last_error($conexion);
}
pg_close($conexion);
?>