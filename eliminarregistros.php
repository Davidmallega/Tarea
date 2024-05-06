<?php
include 'reportes.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title> 
</head>
<body>
<h2>Eliminar Registro</h2>
    <form action="eliminar.php" method="post">
        <label for="id">ID:</label>
        <input type="text" id="id" name="id" required><br>
        <input type="submit" value="Eliminar Registro">
    </form>
</body>
</html>

