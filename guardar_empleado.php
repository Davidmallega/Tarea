<?php
// Conexión a la base de datos 
$conexion = new mysqli("localhost", "root", "", "registro_em_vi");
// Verificar conexión si no error 
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
// Obtener datos del formulario
if (isset($_POST['numero_acceso'])) {
    // Formulario de empleado traer 
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $numero_acceso = $_POST['numero_acceso'];
    $fecha_registro = $_POST['fecha_registro'];

    // Insertar datos en la tabla de empleado sin hora de entrada y hora de salida
    $sql = "INSERT INTO empleado (nombre, apellido, numero_acceso, fecha_registro) 
            VALUES ('$nombre', '$apellido', '$numero_acceso', '$fecha_registro')";
}
// Ejecutar la consulta SQL
if ($conexion->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}
// Cerrar conexión
$conexion->close();
?>

