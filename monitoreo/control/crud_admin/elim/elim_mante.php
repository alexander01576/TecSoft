<?php

require '../../conexion.php';

$id_mante = $_POST['id_mante'];


$sql = "delete from mantenimiento where id_mantenimiento = $id_mante;";
if (pg_query($conexion, $sql)) {
    echo '<script language="javascript">alert("Dato eliminado");window.location.href="../cons/consul_mante.php"</script>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
?>
