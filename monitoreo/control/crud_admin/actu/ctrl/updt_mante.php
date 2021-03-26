<?php
require '../../../conexion.php';


$id_send = $_POST['idSend'];
$id_mantenimiento = $_POST['id_mantenimiento'];
$fecha_mantenimiento = $_POST['fecha_mantenimiento'];
$id_perso_mante = $_POST['id_perso_mante'];
$precio = $_POST['precio'];

$sql = "UPDATE mantenimiento SET id_mantenimiento='$id_mantenimiento', fecha_matenimiento='$fecha_mantenimiento', id_persona_mantenimiento='$id_perso_mante', precio_mantenimiento='$precio' WHERE id_mantenimiento = $id_send;";
if (pg_query($conexion, $sql)) {
    echo '<script language="javascript">alert("Datos Actualizados, mostrando registros");window.location.href="../../cons/consul_mante.php"</script>';
} else {
      echo "Error: " . $sql . "<br>" . pg_last_error($conexion);
}
pg_close($conexion);
?>