<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_consulta.css">
    <title>Document</title>
</head>
<body>

<h3>Tabla de resultados de busquedad</h3>
    <table border='2'>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Telefono</th>
            
        </tr>
<?php
include_once 'conexion.php';
$id_proveedor= $_POST['id_proveedor'];

$query= "SELECT * FROM proveedor where id_proveedor=$id_proveedor;";
$data = mysqli_query($mysqli, $query);
$total = mysqli_num_rows($data);


if($total!=0){
    while($row=mysqli_fetch_assoc($data)){
        echo "<tr> <td>" . $row['id_proveedor'] . "</td> <td>" . $row ['nombre'] .
        "</td> <td>" . $row['apellido'] . "</td> <td>" . $row ['telefono'] .
        "</td></tr>";

    }
}

?>

</body>
</html>
