<html>
<?php 
include_once 'conexion.php';

$id_pago = $_POST['id_pago'];

$sql = "SELECT * FROM pagos where id_pago=$id_pago;";

$result = mysqli_query($mysqli, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0){
    $row =  mysqli_fetch_assoc($result);

    $tipo_pago=$row['tipo_pago'];
    $descripcion_pago=$row['descripcion_pago'];
    $monto=$row['monto'];
    $activo=$row['activo'];
}
?>

<body>
<link href="style.css" rel="stylesheet">
<div class="form-container">
    <center>
    <form action="queryActu.php" method="POST">
        <input type="text" name="id_pago" value="<?php echo $id_pago?>"><br>

    <h3>Tipo del Pago:</h3><br><input type="text" name="tipo_pago" value="<?php echo $tipo_pago?>"><br>
    <h3>Descripcion del Pago:</h3><br><input type="text" name="descripcion_pago" value="<?php echo $descripcion_pago?>"><br>
    <h3>Monto del pago:</h3><br><input type="text" name="monto" value="<?php echo $monto?>"><br>
    <h3>¿Está Activo?</h3><br>
    Activo<input type="radio" value="1" value="<?php echo $activo?>" name="activo"/>
    Inactivo<input type="radio" value="0" value="<?php echo $activo?>" name="activo"/>
        <br>
        <br>

        <button type="submit" name="enviar">Enviar</button>
    <br>
    </form>
    </center>
</div>
</body>
</html>