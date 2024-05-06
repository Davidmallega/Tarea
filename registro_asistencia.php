<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Asistencia</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Registro de Asistencia</h1>
    <form action="guardar_asistencia.php" method="post">
        <label for="numero_acceso">Número de Acceso:</label>
        <input type="text" id="numero_acceso" name="numero_acceso" required><br>
        <input type="hidden" id="nombre" name="nombre">
        <label for="hora_entrada">Hora de Entrada:</label>
        <input type="time" id="hora_entrada" name="hora_entrada" required><br>
        
        <label for="hora_salida">Hora de Salida:</label>
        <input type="time" id="hora_salida" name="hora_salida" required><br>
        
        <input type="submit" value="Registrar Asistencia">
    </form>
</body>
<br>
<a href="index.php"><button>Regresar al Inicio</button></a>
</html>
