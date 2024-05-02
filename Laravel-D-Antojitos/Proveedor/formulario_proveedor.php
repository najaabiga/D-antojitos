<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulario proveedor</title>
</head>
<body>
  <h2>Registro de Proveedor</h2>
<form action= "insertar.php" method="POST">
  <label for="id_proveedor">Id del proveedor:</label><br>
  <input type="text" id="id_proveedor" name="id_proveedor"><br>

  <label for="nombre">Nombre:</label><br>
  <input type="text" id="nombre" name="nombre"><br>

  <label for="apellido">Apellido:</label><br>
  <input  type="text" id="apellido" name="apellido"><br>

  <label for="telefono">Telefono:</label><br>
  <input type="text" id="telefono" name="telefono"><br>
  <br>
  <input type="submit" value="Guardar">
  <br>
</form>

<h3>Buscar proveedores</h3>

<form action="consulta.php" method="POST">
  <input type="text" name="id_proveedor" placeholder="Busca aqui el id del proveedor">
  <button type="submit" name="submit" > Buscar</button>
</form>

<h3>Editar proveedor</h3>
<form action="editar.php" method="POST">
  <input type="text" name="id_proveedor" placeholder="id_proveedor">
  <button type="submit" name="actualizar">Editar</button>
</form>

<h3>Lista de proveedores</h3>
    

    <table border="2">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Telefono</th>
            

        </tr>



<?php
include_once 'conexion.php';

$query= "SELECT * FROM proveedor";

$data= mysqli_query($mysqli, $query);

$total= mysqli_num_rows($data);

if($total!=0){
  while($row= mysqli_fetch_assoc($data)){
  echo "<tr> <td>" . $row['id_proveedor'] . "</td> 
  <td>" . $row['nombre'] . "</td> 
  <td>" . $row['apellido'] . "</td>
  <td>" . $row['telefono'] . "</td>  <td> <a href='borrar.php?rn=$row[id_proveedor]'>Borrar</a> </td> </tr>";

  }
}




?>
</table>
</body>
</html>