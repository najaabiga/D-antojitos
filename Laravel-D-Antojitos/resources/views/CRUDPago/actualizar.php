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
}
?>

<body>
    <form action="queryActu.php" method="POST">
        <input type="text" name="id_pago" value="<?php echo $id_pago?>"><br>

    Tipo del Pago:<br><input type="text" name="tipo_pago" value="<?php echo $tipo_pago?>"><br>
    Descripcion del Pago:<br><input type="text" name="descripcion_pago" value="<?php echo $descripcion_pago?>"><br>

        <br>
        <br>

        <button type="sumbit" name="enviar">Enviar</button>
    <br>
    </form>
</body>
</html>