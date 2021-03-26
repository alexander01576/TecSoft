<?php

require '../../conexion.php';

$id_vent = $_POST['id_ventilador'];


$sql = "delete from ventilador where id_ventilador = $id_vent;";
if (pg_query($conexion, $sql)) {
    echo '<script language="javascript">alert("Ventilador eliminado");window.location.href="../cons/consul_vent.php"</script>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
pg_close($conexion);
?>
