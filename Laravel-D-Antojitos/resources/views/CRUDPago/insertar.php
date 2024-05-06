<?php
include_once 'conexion.php';

$id_cliente = $_POST['id_cliente'];
$id_pedido = $_POST['id_pedido'];
$tipo_pago = $_POST['tipo_pago'];
$descripcion_pago = $_POST['descripcion_pago'];
$monto = $_POST['monto'];
$banco = $_POST['banco'];
$tipo_moneda = $_POST['tipo_moneda'];
$activo = $_POST['activo'];

$sqlinsert = "INSERT INTO pagos values(0, '$id_cliente', '$id_pedido','$tipo_pago', '$descripcion_pago', '$monto', '$banco', '$tipo_moneda', '$activo')";

mysqli_query($mysqli, $sqlinsert);
header("location:./index.php?insert=sucess");
?>