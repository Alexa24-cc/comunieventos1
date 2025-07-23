<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Login</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
            background-color: #F5F5F5;
            font-family: Arial, sans-serif;
        }
        .container {
            text-align: center;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #FFF;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #2E8B57;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #3CB371;
        }
    </style>
</head>
<body>
    <div class="container">
        <<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" &&
    isset($_POST["nombre"]) &&
    isset($_POST["correo"]) &&
    isset($_POST["contraseña"])) {

    $conexion = mysqli_connect('localhost', 'root', '', 'comunieventos') or die('Error en la conexión del servidor');

    $nombre = mysqli_real_escape_string($conexion, $_POST["nombre"]);
    $correo = mysqli_real_escape_string($conexion, $_POST["correo"]);
    $contraseña = mysqli_real_escape_string($conexion, $_POST["contraseña"]);

    $sql = "INSERT INTO login (nombre, correo, contraseña) VALUES ('$nombre', '$correo', '$contraseña')";
    $resultado = mysqli_query($conexion, $sql) or die('Error en el query database');

    mysqli_close($conexion);

    echo '<h2>DATOS INGRESADOS CORRECTAMENTE:</h2>';
    echo '<br>';
    echo 'El nombre ingresado es: ' . htmlspecialchars($nombre) . '<br>';
} else {
    echo '<h2>Error: No se recibieron datos del formulario.</h2>';
}
?>


        <br>
        <a class="btn" href="prueba1.html">Ir a Inicio</a>
    </div>
</body>
</html>