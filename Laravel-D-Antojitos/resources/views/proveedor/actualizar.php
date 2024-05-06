
<?php

include_once 'conexion.php';
$id_proveedor = $_POST['id_proveedor'];

if(isset($_POST['id_proveedor'])){

    $id_proveedor = $_POST['id_proveedor'];

    $query = "UPDATE `proveedor` SET nombre='$_POST[nombre]', apellido='$_POST[apellido]', telefono='$_POST[telefono]' where id_proveedor='$_POST[id_proveedor]'";
    mysqli_query($mysqli, $query);
   
}


header("location:./formulario_proveedor.php?insert=success");

?>
