<?php
require '../../../conexion.php';

$id_mantenimiento = $_POST['id_mantenimiento'];
$fecha_mantenimiento = $_POST['fecha_mantenimiento'];
$id_peso_mante = $_POST['id_peso_mante'];
$precio = $_POST['precio'];

$sql = "insert into mantenimiento values ($id_mantenimiento, '$fecha_mantenimiento', $id_peso_mante, $precio);";
if (pg_query($conexion, $sql)) {
    echo '<script language="javascript">alert("Datos registrados, mostrando registros");window.location.href="../../cons/consul_mante.php"</script>';
} else {
      echo "Error: " . $sql . "<br>" . pg_last_error($conexion);
}
pg_close($conexion);
?>