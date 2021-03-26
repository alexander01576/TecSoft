<?php
require '../../../conexion.php';


$id_send = $_POST['idSend'];
$id_ventilador = $_POST['id_ventilador'];
$area = $_POST['area'];
$fecha_instalacion = $_POST['fecha_instalacion'];

$sql = "UPDATE ventilador SET id_ventilador='$id_ventilador', area='$area', fecha_instalacion='$fecha_instalacion' WHERE id_ventilador = $id_send;";
if (pg_query($conexion, $sql)) {
    echo '<script language="javascript">alert("Datos Actualizados, mostrando registros");window.location.href="../../cons/consul_vent.php"</script>';
} else {
      echo "Error: " . $sql . "<br>" . pg_last_error($conexion);
}
pg_close($conexion);
?>