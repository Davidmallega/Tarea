<?php
// Conexión a la base de datos 
$conexion = new mysqli("localhost", "root", "", "registro_em_vi");

// Verificar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Obtener ID del formulario
$id = $_POST['id'];

// Verificar si el ID pertenece a un registro de empleado
$sql_empleado = "SELECT * FROM empleado WHERE id = $id";
$resultado_empleado = $conexion->query($sql_empleado);

// Verificar si el ID pertenece a un registro de visita
$sql_visita = "SELECT * FROM visita WHERE id = $id";
$resultado_visita = $conexion->query($sql_visita);

// Verificar si el ID pertenece a un registro de asistencia
$sql_asistencia = "SELECT * FROM asistencia WHERE id = $id";
$resultado_asistencia = $conexion->query($sql_asistencia);

// Si el ID pertenece a un registro de empleado, eliminarlo de la tabla de empleados
if ($resultado_empleado->num_rows > 0) {
    $sql_eliminar = "DELETE FROM empleado WHERE id = $id";
    if ($conexion->query($sql_eliminar) === TRUE) {
        echo "Registro de empleado eliminado exitosamente";
    } else {
        echo "Error al eliminar registro de empleado: " . $conexion->error;
    }
} elseif ($resultado_visita->num_rows > 0) { // Si el ID pertenece a un registro de visita, eliminarlo de la tabla de visitas
    $sql_eliminar = "DELETE FROM visita WHERE id = $id";
    if ($conexion->query($sql_eliminar) === TRUE) {
        echo "Registro de visita eliminado exitosamente";
    } else {
        echo "Error al eliminar registro de visita: " . $conexion->error;
    }
} elseif ($resultado_asistencia->num_rows > 0) { // Si el ID pertenece a un registro de asistencia, eliminarlo de la tabla de asistencias
    $sql_eliminar = "DELETE FROM asistencia WHERE id = $id";
    if ($conexion->query($sql_eliminar) === TRUE) {
        echo "Registro de asistencia eliminado exitosamente";
    } else {
        echo "Error al eliminar registro de asistencia: " . $conexion->error;
    }
} else { // Si el ID no pertenece a ningún registro de empleado, visita o asistencia
    echo "No se encontró ningún registro con el ID proporcionado";
}

// Cerrar conexión
$conexion->close();
?>
