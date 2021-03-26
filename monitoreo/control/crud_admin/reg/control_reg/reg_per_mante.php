<?php
require '../../../conexion.php';

$id_persona_mantenimiento = $_POST['id_persona_mantenimiento'];
$nombre = $_POST['nombre'];
$ap_pat = $_POST['ap_pat'];
$ap_mat = $_POST['ap_mat'];
$edad = $_POST['edad'];
$empresa = $_POST['empresa'];

$sql = "insert into persona_mantenimiento values ($id_persona_mantenimiento, '$nombre', '$ap_pat', '$ap_mat', $edad, '$empresa');";
if (pg_query($conexion, $sql)) {
      echo '<script language="javascript">alert("Datos registrados, mostrando registros");window.location.href="../../cons/consul_per_mantenimiento.php"</script>';

} else {
      echo "Error: " . $sql . "<br>" . pg_last_error($conexion);
}
pg_close($conexion);
?>