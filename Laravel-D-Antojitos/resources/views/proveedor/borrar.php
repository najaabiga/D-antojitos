<?php
include_once 'conexion.php';

$id_proveedor = $_GET['rn'];
$query = " DELETE FROM proveedor WHERE id_proveedor = '$id_proveedor'";

$data = mysqli_query($mysqli, $query);
header("location:./formulario_proveedor.php?insert=success");

?>