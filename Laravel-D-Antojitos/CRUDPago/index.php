<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, inital scale=1.0">
    <head>
        <link href="style.css" rel="stylesheet">
        <title>Formulario de Pago</title>
    </head>
    <center>
    <h2>Formulario de Pagos</h2>
    </center>
    <body>
    <div class="form-container">
    <center>
    <form action="insertar.php" method="POST">
    <h3>Tipo del Pago:</h3><br><input type="text" name="tipo_pago" required><br>
    <h3>Descripcion del Pago:</h3><br><input type="text" name="descripcion_pago"><br>
    <br>
    <button type="submit" name="enviar">Enviar</button>

    </form>

<br>
<h3>Busqueda</h3>
<form action="consulta.php" method="post">

<input type="text" name="id_pago" placeholder="Pago a buscar"><br><br>
<button type="submit" name="buscar">Buscar</button>
</form>
<br>

<h3>Editar noticia</h3>
<form action="actualizar.php" method="POST">
    <input type="text" name="id_pago" placeholder="Id del pago que deseas actualizar"><br><br>
    <button type="submit" name="actualizar">Editar</button>
</form>
<br>
    </center>
<h4>Lista de los Pagos</h4>
<table border="2">
<tr>
<th>Id del pago</th>
<th>Tipo del pago</th>
<th>Descripcion</th>
</tr>

<?php
include_once 'conexion.php';

$query = "SELECT * FROM pagos";
$data = mysqli_query($mysqli, $query);
$total = mysqli_num_rows($data); 

if($total!=0){
    while($row=mysqli_fetch_assoc($data)){
        echo "<tr> <td>" . $row['id_pago'] . "</td> <td>" . $row['tipo_pago'] . "</td> <td>" . $row['descripcion_pago'] . "</td> <td> <a href='borrar.php?br=$row[id_pago]'>Borrar</td> </tr>";
    }
}


?>

</table>
</div>
</body>
</html>