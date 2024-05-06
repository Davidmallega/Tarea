<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Accesos</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Registro de Empleados </h1>
    <h2>Empleado</h2>
    <form action="guardar_empleado.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>
        
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required><br>
        
        <label for="numero_acceso">Número de Acceso:</label>
        <input type="text" id="numero_acceso" name="numero_acceso" required><br>
        
        <label for="fecha_registro">Fecha de Registro:</label>
        <input type="date" id="fecha_registro" name="fecha_registro" required><br>
        
        <input type="submit" value="Registrar Empleado">
    </form>
    
    <h2>Eliminar Registro</h2>
    <form action="eliminar.php" method="post">
        <label for="id">ID:</label>
        <input type="text" id="id" name="id" required><br>
        <input type="submit" value="Eliminar Registro">
    </form>
    <h2>Generar Reportes</h2>
    <form action="reportes.php" method="post">
        <input type="submit" value="Generar Reportes">
        
    </form>
</body>
<br>
<a href="index.php"><button>Regresar al Inicio</button></a>
</html>
