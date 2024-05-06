<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario </title>
</head>
<body>
<form action= "insertar.php" method="POST">
  <label for="id_proveedor">Id del proveedor:</label><br>
  <input type="text" id="id_proveedor" name="id_proveedor"><br>

  <label for="nombre">Nombre:</label><br>
  <input type="text" id="nombre" name="nombre"><br>

  <label for="apellido">Apellido:</label><br>
  <textarea id="apellido" name="apellido"></textarea><br>

  <label for="telefono">Teléfono:</label><br>
  <input type="text" id="telefono" name="telefono"><br>
  
<br>
  <br>
  <input type="submit" value="Enviar">
</form>

</body>
</html>