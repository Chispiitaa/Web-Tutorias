<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "tutorias";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$genero = $_GET['genero'];
$sql = "SELECT id, nombre, apellido FROM tutores WHERE genero = '$genero' AND num_alum < 15";
$result = $conn->query($sql);

$tutores = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $tutores[] = $row;
    }
}

$conn->close();

header('Content-Type: application/json');
echo json_encode($tutores);
?>
