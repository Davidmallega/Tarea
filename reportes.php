<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reportes.css">
</head>
<body>
<?php
// Conexión a la base de datos 
$conexion = new mysqli("localhost", "root", "", "registro_em_vi");

// Verificar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Generar reportes de empleados
$sql_empleados = "SELECT id, nombre, apellido, numero_acceso, fecha_registro, hora_entrada, hora_salida FROM empleado ORDER BY fecha_registro ASC";
$resultado_empleados = $conexion->query($sql_empleados);

// Mostrar reporte de empleados
echo "<h2>Reportes</h2>";
echo "<h2>Registro de Empleados</h2>";
echo "<table border='1'>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Numero de Acceso</th>
        <th>Fecha Registro</th>
        </tr>";

if ($resultado_empleados->num_rows > 0) {
    while($fila = $resultado_empleados->fetch_assoc()) {
        echo "<tr>
            <td>".$fila['id']."</td>
            <td>".$fila['nombre']."</td>
            <td>".$fila['apellido']."</td>
            <td>".$fila['numero_acceso']."</td>
            <td>".$fila['fecha_registro']."</td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='7'>No hay registros de empleados</td></tr>";
}
echo "</table>";

// Generar reportes de visitas
$sql_visitas = "SELECT id, nombre, apellido, nombre_empresa, proposito, hora_entrada, hora_salida FROM visita ORDER BY hora_entrada ASC";
$resultado_visitas = $conexion->query($sql_visitas);

// Mostrar reporte de visitas
echo "<h2>Registro de Visitas</h2>";
echo "<table border='1'>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Empresa</th>
        <th>Propósito</th>
        <th>Hora Entrada</th>
        <th>Hora Salida</th>
    </tr>";

if ($resultado_visitas->num_rows > 0) {
    while($fila = $resultado_visitas->fetch_assoc()) {
        echo "<tr>
            <td>".$fila['id']."</td>
            <td>".$fila['nombre']."</td>
            <td>".$fila['apellido']."</td>
            <td>".$fila['nombre_empresa']."</td>
            <td>".$fila['proposito']."</td>
            <td>".$fila['hora_entrada']."</td>
            <td>".$fila['hora_salida']."</td>
            
        </tr>";
    }
} else {
    echo "<tr><td colspan='7'>No hay registros de visitas</td></tr>";
}
echo "</table>";

// Generar reporte de asistencias
$sql_asistencias = "SELECT id, nombre, numero_acceso, hora_entrada, hora_salida FROM asistencia ORDER BY fecha ASC";
$resultado_asistencias = $conexion->query($sql_asistencias);

// Mostrar reporte de asistencias
echo "<h2>Registro de Asistencias</h2>";
echo "<table border='1'>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Número de Acceso</th>
        <th>Hora Entrada</th>
        <th>Hora Salida</th>
    </tr>";

if ($resultado_asistencias->num_rows > 0) {
    while($fila = $resultado_asistencias->fetch_assoc()) {
        echo "<tr>
            <td>".$fila['id']."</td>
            <td>".$fila['nombre']."</td>
            <td>".$fila['numero_acceso']."</td>
            <td>".$fila['hora_entrada']."</td>
            <td>".$fila['hora_salida']."</td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='5'>No hay registros de asistencias</td></tr>";
}
echo "</table>";
// Cerrar conexión
$conexion->close();
?>

<br>
<a href="index.php"><button>Regresar al Inicio</button></a>
</body>
</html>




