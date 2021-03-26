<?php

require '../../conexion.php';

$id_per = $_POST['id_per'];


$sql = "delete from persona_mantenimiento where id_persona_mantenimiento = $id_per;";
if (pg_query($conexion, $sql)) {
    echo '<script language="javascript">alert("Usuario eliminado");window.location.href="../cons/consul_per_mantenimiento.php"</script>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
?>
