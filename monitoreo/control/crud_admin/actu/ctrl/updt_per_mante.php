<?php
require '../../../conexion.php';

$sendID = $_POST['idSend'];
$id_persona_mantenimiento = $_POST['id_persona_mantenimiento'];
$nombre = $_POST['nombre'];
$ap_pat = $_POST['ap_pat'];
$ap_mat = $_POST['ap_mat'];
$edad = $_POST['edad'];
$empresa = $_POST['empresa'];

$sql = "UPDATE persona_mantenimiento SET id_persona_mantenimiento=$id_persona_mantenimiento, nombre='$nombre', ap_pat='$ap_pat', ap_mat='$ap_mat', edad=$edad, empresa_de_mantenimiento='$empresa' WHERE id_persona_mantenimiento=$sendID;";
if (pg_query($conexion, $sql)) {
    echo '<script language="javascript">alert("Datos Actualizdos, Mostrando registros");window.location.href="../../cons/consul_per_mantenimiento.php"</script>';
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
?>