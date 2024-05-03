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
    <h3>Id del cliente:</h3><br><input type="text" name="id_cliente" required><br>
    <h3>Id del pedido:</h3><br><input type="text" name="id_pedido" required><br>
    <h3>Tipo del pago:</h3>
    <select name="tipo_pago">
    <option value="transferencia">Transferencia</option>
    <option value="efectivo">Efectivo</option>
    <option value="tarjeta">Tarjeta</option>    
    </select>
    <h3>Descripcion del Pago:</h3><br><input type="text" name="descripcion_pago"><br>
    <h3>Monto:</h3><br><input type="text" name="monto" required><br>
    <h3>Banco:</h3><br><input type="text" name="banco"><br>

    <h3>Tipo de Moneda:</h3>
    <select name="tipo_moneda">
        <option value="dop">Moneda Dominicana</option>
        <option value="us">Dolar</option>
    </select>
    <br>
    <br>
    <br>

    <h3>¿Está Activo?</h3>
    Activo<input type="radio" value="1" name="activo"/>
    Inactivo<input type="radio" value="0" name="activo"/>
    <br>
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

<h3>Editar Pago</h3>
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
<th>Id del cliente</th>
<th>Id del pedido</th>
<th>Tipo del pago</th>
<th>Descripcion</th>
<th>Monto</th>
<th>Banco</th>
<th>Moneda</th>
<th>Activo</th>
</tr>

<?php
include_once 'conexion.php';

$query = "SELECT * FROM pagos";
$data = mysqli_query($mysqli, $query);
$total = mysqli_num_rows($data); 

if($total!=0){
    while($row=mysqli_fetch_assoc($data)){
        echo "<tr> <td>" . $row['id_pago'] . "</td> <td>" . $row['id_cliente'] . "</td> <td>" . $row['id_pedido'] . "</td> <td>" . $row['tipo_pago'] . "</td> <td>" . $row['descripcion_pago'] . "</td> <td>" . $row['monto'] . "</td> <td>" . $row['banco'] . "</td> <td>" . $row['tipo_moneda'] . "</td> <td>" . $row['activo'] . "</td> <td> <a href='borrar.php?br=$row[id_pago]'>Borrar</td> </tr>";
    }
}


?>

</table>
</div>
</body>
</html>