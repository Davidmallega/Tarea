<?php
include 'conexion.php'; // Incluir archivo de conexión

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$nombre_empresa = $_POST['nombre_empresa'];
$proposito = $_POST['proposito'];
$hora_entrada = $_POST['hora_entrada'];
$hora_salida = $_POST['hora_salida'];

// Insertar datos en la tabla de visitas
$sql = "INSERT INTO visita (nombre, apellido, nombre_empresa, proposito, hora_entrada, hora_salida) 
        VALUES ('$nombre', '$apellido', '$nombre_empresa', '$proposito', '$hora_entrada', '$hora_salida')";

if ($conexion->query($sql) === TRUE) {
    echo "Registro de visita exitoso";
} else {
    echo "Error al registrar visita: " . $conexion->error;
}

// Cerrar conexión

$conexion->close();
?>
