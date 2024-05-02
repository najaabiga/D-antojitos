<?php
include_once 'conexion.php';

$tipo_pago = $_POST['tipo_pago'];
$descripcion_pago = $_POST['descripcion_pago'];

$sqlinsert = "INSERT INTO pagos values(0, '$tipo_pago', '$descripcion_pago')";

mysqli_query($mysqli, $sqlinsert);
header("location:./index.php?insert=sucess");
?>