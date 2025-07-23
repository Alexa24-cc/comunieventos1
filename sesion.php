<?php 
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "comunieventos";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

$correo = $_POST['correo'] ?? '';
$contraseña = $_POST['contraseña'] ?? '';

$sql = "SELECT * FROM login WHERE correo = ? AND contraseña = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $correo, $contraseña);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {

  header("Location: prueba1.html");
  exit();
} else {

  header("Location: login.html");
  exit();
}

$stmt->close();
$conn->close();
?>
