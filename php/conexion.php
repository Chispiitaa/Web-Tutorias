<?php
    $conn = new mysqli('localhost', 'root', '', 'tutorias');
    
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }else{
        //echo "Conexión exitosa";
    }
    
?>