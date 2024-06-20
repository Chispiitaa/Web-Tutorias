<?php
session_start([
    'cookie_lifetime' => 0,
]);

if (!isset($_SESSION['nombre']) || $_SESSION['nombre'] !== 'Admin') {
    header("Location: signin.php");
    exit();
}

if (isset($_GET['id'])) {
    require 'php/conexion.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM tutores WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
    $conn->close();
}
?>
