<?php
require '../../../conexion.php';

$id_persona = $_POST['id_persona'];
$correo = $_POST['correo'];
$clave = $_POST['clave'];
$nombre = $_POST['nombre'];
$ap_pat = $_POST['ap_pat'];
$ap_mat = $_POST['ap_mat'];
$edad = $_POST['edad'];
$privilegio = $_POST['privilegio'];

$sql = "insert into persona values ($id_persona, '$correo', '$clave', '$nombre', '$ap_pat', '$ap_mat', $edad, $privilegio);";
if (pg_query($conexion, $sql)) {
      echo '<script language="javascript">alert("Datos registrados, mostrando registros");window.location.href="../../cons/consul_per.php"</script>';

} else {
      echo "Error: " . $sql . "<br>" . pg_last_error($conexion);
}
pg_close($conexion);
?>