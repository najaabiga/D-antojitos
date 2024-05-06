<?php

include_once 'conexion.php';
$id_pago = $_POST['id_pago'];

if(isset($_POST['id_pago'])){

    $id = $_POST['id_pago'];

    $query = "UPDATE `pagos` SET tipo_pago='$_POST[tipo_pago]', descripcion_pago='$_POST[descripcion_pago]', monto='$_POST[monto]', activo='$_POST[activo]' where id_pago='$_POST[id_pago]'";
    mysqli_query($mysqli, $query);
   
}

header("location: ./index.php?insert=success");

?>