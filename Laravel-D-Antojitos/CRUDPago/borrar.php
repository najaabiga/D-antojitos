<?php 
include_once 'conexion.php';

$id_pago = $_GET['br'];
$query = "DELETE FROM pagos WHERE id_pago ='$id_pago'";

$data=mysqli_query($mysqli, $query);
header("location: ./index.php?insert=sucess");
?>