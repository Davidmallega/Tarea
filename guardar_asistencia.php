<?php
include 'conexion.php'; // Incluir archivo de conexión

// Obtener datos del formulario
$numero_acceso = $_POST['numero_acceso'];
$hora_entrada = $_POST['hora_entrada'];
$hora_salida = $_POST['hora_salida'];

// Consultar el nombre del empleado correspondiente al número de acceso
$sql_nombre_empleado = "SELECT nombre FROM empleado WHERE numero_acceso = '$numero_acceso'";
$resultado_nombre_empleado = $conexion->query($sql_nombre_empleado);

if ($resultado_nombre_empleado->num_rows > 0) {
    // Extraer el nombre del empleado
    $fila = $resultado_nombre_empleado->fetch_assoc();
    $nombre_empleado = $fila['nombre'];
    
    // Insertar asistencia en la tabla
    $sql_insertar_asistencia = "INSERT INTO asistencia (nombre, numero_acceso, hora_entrada, hora_salida)
    VALUES ('$nombre_empleado', '$numero_acceso', '$hora_entrada', '$hora_salida')";
    
    if ($conexion->query($sql_insertar_asistencia) === TRUE) {
        echo "Registro de asistencia guardado exitosamente";
    } else {
        echo "Error al guardar el registro de asistencia: " . $conexion->error;
    }
} else {
    // Si no se encuentra ningún empleado con el número de acceso proporcionado
    echo "No se encontró ningún empleado con el número de acceso proporcionado: $numero_acceso";
}

// Cerrar conexión
$conexion->close();
?>



