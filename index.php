<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Accesos</title>
    <style>
        body {
            background-image: url('img/edificios.jpg');
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.10);
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 300px;
            text-align: center;
        }
        h2 {
            margin-top: 0;
            color: #333;
        }
        button {
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
    <img src="img/tecnolamp.png" alt="Logotipo" width="300" height="100">
        
        <button onclick="window.location.href='registro_empleados.php'">Registro de empleados</button>
        <button onclick="window.location.href='registro_visitas.php'">Registro visitas</button>
        <button onclick="window.location.href='registro_asistencia.php'">Asistencias</button>
        <button onclick="window.location.href='reportes.php'">Reportes</button>
        <button onclick="window.location.href='eliminarregistros.php'">eliminar</button>
        </form>
    </div>
</body>
</html>

