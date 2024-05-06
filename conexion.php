<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "registro_em_vi";
// Crear conexión
$conexion = new mysqli($servername, $username, $password, $database);
// Verificar conexión
if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}
?>
