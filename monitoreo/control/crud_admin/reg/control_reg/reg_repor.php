<?php
require '../../../conexion.php';

$id_reporte = $_POST['id_reporte'];
$id_perso_repo = $_POST['id_peso_repo'];
$fecha_repor = $_POST['fecha_repor'];
$reporte = $_POST['reporte'];

$sql = "insert into reporte values ($id_reporte, $id_perso_repo, '$fecha_repor', '$reporte');";
if (pg_query($conexion, $sql)) {
    echo '<script language="javascript">alert("Datos registrados, mostrando registros");window.location.href="../../cons/consul_repo.php"</script>';
} else {
      echo "Error: " . $sql . "<br>" . pg_last_error($conexion);
}
pg_close($conexion);
?>