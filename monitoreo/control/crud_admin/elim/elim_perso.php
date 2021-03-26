<?php

require '../../conexion.php';

$id_per = $_POST['id_per'];


$sql = "delete from persona where id_persona = $id_per;";
if (pg_query($conexion, $sql)) {
    echo '<script language="javascript">alert("Usuario eliminado");window.location.href="../cons/consul_per.php"</script>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
?>
