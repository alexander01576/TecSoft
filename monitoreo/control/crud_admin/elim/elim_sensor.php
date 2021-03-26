<?php

require '../../conexion.php';

$id_sensor = $_POST['id_sensor'];


$sql = "delete from sensor where id_sensor = $id_sensor;";
if (pg_query($conexion, $sql)) {
    echo '<script language="javascript">alert("sensor eliminado");window.location.href="../cons/consul_sensor.php"</script>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
pg_close($conexion);
?>
