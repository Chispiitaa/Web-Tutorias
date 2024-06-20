<?php

require 'conexion.php';

if (isset($_POST['boleta'])) {
    $boleta = $_POST['boleta'];
    $sql = "SELECT * FROM registro WHERE boleta = '$boleta'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo 'exists';
    } else {
        echo 'not exists';
    }

    $conn->close();
}

?>