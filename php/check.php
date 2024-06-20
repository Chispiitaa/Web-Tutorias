<?php

require 'conexion.php';

if (isset($_POST['boleta']) && isset($_POST['email'])) {
    $boleta = $_POST['boleta'];
    $email = $_POST['email'];

    // Consulta para verificar si la boleta o el correo electrónico ya existen
    $sql = "SELECT * FROM registro WHERE boleta = '$boleta' OR email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo 'exists';
    } else {
        echo 'not exists';
    }

    $conn->close();
}

?>
