<?php

require 'conexion.php';

if (isset($_POST['registrar'])) {
    $boleta = $_POST['boleta'];
    $nombre = $_POST['nombre'];
    $apePa = $_POST['apePa'];
    $apeMa = $_POST['apeMa'];
    $telefono = $_POST['telefono'];
    $semestre = $_POST['semestre'];
    $carrera = $_POST['carrera'];
    $tutor_genero = $_POST['tutor_genero'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    $sql = "INSERT INTO registro (boleta, nombre, apePa, apeMa, telefono, semestre, carrera, tutor_genero, email, password, id_cargo)
            VALUES ('$boleta', '$nombre', '$apePa', '$apeMa', '$telefono', '$semestre', '$carrera', '$tutor_genero', '$email', '$password', '2')";
    
    if ($conn->query($sql) === TRUE) {
        header("location:../signin.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}

?>
