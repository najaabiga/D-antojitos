<html>
<link href="style.css" rel="stylesheet">
<body>
<h4>Lista de los Pagos</h4>
<table border="2">
<tr>
<th>Id del pago</th>
<th>Tipo del pago</th>
<th>Descripcion</th>
</tr>

<?php
include_once 'conexion.php';

$id_pago = $_POST['id_pago'];

$query = "SELECT * FROM pagos where id_pago=$id_pago";
$data = mysqli_query($mysqli, $query);
$total = mysqli_num_rows($data); 

if($total!=0){
    while($row=mysqli_fetch_assoc($data)){
        echo "<tr> <td>" . $row['id_pago'] . "</td> <td>" . $row['tipo_pago'] . "</td> <td>" . $row['descripcion_pago'] . "</td> </tr>";
    }
}


?>

    </table>
</body>
</html>
