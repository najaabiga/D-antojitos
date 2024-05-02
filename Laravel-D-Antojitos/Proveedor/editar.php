<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_editar.css">
    <title>Document</title>
</head>
<body>
    <h3>Editar proveedor</h3>
    <?php
    include_once 'conexion.php';
        $id_proveedor = $_POST['id_proveedor'];

             $sql = "SELECT * FROM proveedor where id_proveedor=$id_proveedor;";

            $result = mysqli_query($mysqli, $sql);
            $resultCheck = mysqli_num_rows($result);
           
                if ($resultCheck > 0){
                    $row = mysqli_fetch_assoc($result);
                    $nombre=$row['nombre'];
                    $apellido=$row['apellido'];
                    $telefono=$row['telefono'];
   
                }
?> 
<form action="actualizar.php" method="POST">
<label for="id_proveedor"><strong>Id del proveedor</strong></label><br>
    <input type="text" name="id_proveedor" placeholder="id_proveedor" value="<?php echo $id_proveedor?>">
    <br>
    <label for="nombre"><strong>Nombre</strong></label><br>
    <input type="text" name="nombre" placeholder="nombre" value="<?php echo $nombre?>">
    <br>
    <label for="apellido"><strong>Apellido</strong></label><br>
    <input type="text" name="apellido" placeholder="apellido" value="<?php echo $apellido?>">
    <br>
    <label for="telefono"><strong>Telefono</strong></label><br>
    <input type="text" name="telefono" placeholder="telefono" value="<?php echo $telefono?>">
    <br>
    <input type="submit" name="update" value="Editar"></button>
    <br>
    
</form>
    
</body>
</html>