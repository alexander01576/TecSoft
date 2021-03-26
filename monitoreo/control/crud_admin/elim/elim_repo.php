<?php

require '../../conexion.php';

$id_repo = $_POST['id_reporte'];


$sql = "delete from reporte where id_reporte = $id_repo;";
if (pg_query($conexion, $sql)) {
    echo '<script language="javascript">alert("Reporte eliminado");window.location.href="../cons/consul_repo.php"</script>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
?>
