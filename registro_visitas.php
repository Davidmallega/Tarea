<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Visitas</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Registro de Visitas</h1>
    <form action="guardar_visita.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>
        
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required><br>
        
        <label for="nombre_empresa">Nombre de la Empresa Visitada:</label>
        <input type="text" id="nombre_empresa" name="nombre_empresa" required><br>
        
        <label for="proposito">Propósito de la Visita:</label>
        <input type="text" id="proposito" name="proposito" required><br>
        
        <label for="hora_entrada">Hora de Entrada:</label>
        <input type="time" id="hora_entrada" name="hora_entrada" required><br>
        
        <label for="hora_salida">Hora de Salida:</label>
        <input type="time" id="hora_salida" name="hora_salida" required><br>
        
        <input type="submit" value="Registrar Visita">
    </form>
    <br>
<a href="index.php"><button>Regresar al Inicio</button></a>
</body>
</html>
