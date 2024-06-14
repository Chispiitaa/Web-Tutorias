<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $boleta = $_POST['boleta'];

    // Prepara y ejecuta la consulta
    $stmt = $conn->prepare("SELECT COUNT(*) FROM registro WHERE boleta = ?");
    $stmt->bind_param("s", $boleta);
    $stmt->execute();
    $stmt->bind_result($count);
    $stmt->fetch();
    $stmt->close();

    if ($count > 0) {
        echo 'exists';
    } else {
        echo 'not_exists';
    }
}
?>