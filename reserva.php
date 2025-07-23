<?php 
$host = "localhost";
$usuario = "root";
$contrasena = "";
$basedatos = "comunieventos";

$conn = new mysqli($host, $usuario, $contrasena, $basedatos);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre    = $conn->real_escape_string($_POST["nombre"]);
    $email     = $conn->real_escape_string($_POST["email"]);
    $telefono  = $conn->real_escape_string($_POST["telefono"]);
    $fecha     = $conn->real_escape_string($_POST["fecha"]);
    $hora      = $conn->real_escape_string($_POST["hora"]);
    $personas  = intval($_POST["personas"]);

    $sql = "INSERT INTO reserva (nombre, email, telefono, fecha, hora, personas)
            VALUES ('$nombre', '$email', '$telefono', '$fecha', '$hora', $personas)";

    if ($conn->query($sql) === TRUE) {
        echo "
        <html>
        <html lang='es'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Reserva Confirmada</title>
            <style>
                body {
                    font-family: 'Segoe UI', sans-serif;
                    background-color: #f3f4f6;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                    margin: 0;
                }
                .card {
                    background-color: white;
                    padding: 40px;
                    border-radius: 12px;
                    box-shadow: 0 6px 20px rgba(0,0,0,0.15);
                    text-align: center;
                    max-width: 500px;
                }
                h2 {
                    color: #1e40af;
                    margin-bottom: 15px;
                }
                p {
                    font-size: 16px;
                    margin: 6px 0;
                }
                a {
                    display: inline-block;
                    margin-top: 25px;
                    background-color: #1e40af;
                    color: white;
                    padding: 10px 20px;
                    text-decoration: none;
                    border-radius: 6px;
                    transition: background-color 0.3s ease;
                }
                a:hover {
                    background-color: #2563eb;
                }
            </style>
        </head>
        <body>
            <div class='card'>
                <h2>¡Reserva Registrada!</h2>
                <p><strong>Nombre:</strong> $nombre</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Teléfono:</strong> $telefono</p>
                <p><strong>Fecha:</strong> $fecha</p>
                <p><strong>Hora:</strong> $hora</p>
                <p><strong>Personas:</strong> $personas</p>
                <a href='prueba1.html'>Volver al inicio</a>
            </div>
        </body>
        </html>
        ";
    } else {
        echo "<p>Error al guardar: " . $conn->error . "</p>";
    }

    $conn->close();
} else {
    header("Location: prueba1.html");
    exit();
}
?>
