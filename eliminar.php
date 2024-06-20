<?php
require 'php/conexion.php';

$id = $_GET['id'];

$sql = "DELETE FROM registro WHERE id = '$id'";
if (mysqli_query($conn, $sql)) {
    echo "Registro eliminado exitosamente";
    header("Location: admin.php");
} else {
    echo "Error eliminando registro: " . mysqli_error($conn);
}

$conn->close();
?>
