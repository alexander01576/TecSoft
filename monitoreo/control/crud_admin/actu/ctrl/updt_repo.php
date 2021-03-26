<?php
require '../../../conexion.php';


$id_send = $_POST['idSend'];
$id_reporte = $_POST['id_reporte'];
$id_perso_repo = $_POST['id_peso_repo'];
$fecha_repor = $_POST['fecha_repor'];
$reporte = $_POST['reporte'];

$sql = "UPDATE reporte SET id_reporte='$id_reporte', id_persona_reporte='$id_perso_repo', fecha_reporte='$fecha_repor', reporte='$reporte' WHERE id_reporte = $id_send;";
if (pg_query($conexion, $sql)) {
    echo '<script language="javascript">alert("Datos Actualizados, mostrando registros");window.location.href="../../cons/consul_repo.php"</script>';
} else {
      echo "Error: " . $sql . "<br>" . pg_last_error($conexion);
}
pg_close($conexion);
?>