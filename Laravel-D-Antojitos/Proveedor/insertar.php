<?php
include_once 'conexion.php';

$id_proveedor = $_POST ['id_proveedor'];
$nombre = $_POST ['nombre'];
$apellido = $_POST ['apellido'];
$telefono = $_POST ['telefono'];

$sqlinsert = "INSERT INTO proveedor values(0, '$nombre', '$apellido', '$telefono');";

mysqli_query($mysqli, $sqlinsert);
echo ($sqlinsert);

header("location:./formulario_proveedor.php?insert=success");

?>