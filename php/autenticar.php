<?php
    $email = $_POST['email'];
    $password = $_POST['password'];

    session_start();
    require 'conexion.php';

    if(isset($_POST['iniciar'])){
                
        $_SESSION['email'] = $email;

        $consulta = "SELECT * FROM registro WHERE email = '$email' and password = '$password'";
        $resultado = mysqli_query($conn, $consulta);
    
        $filas = mysqli_fetch_array($resultado);

       
            $_SESSION['email'] = $email;
            $_SESSION['id'] = $filas['id'];
            $_SESSION['nombre'] = $filas['nombre'];
            $_SESSION['apePa'] = $filas['apePa'];

            // Redireccionar según el cargo
            if($filas['id_cargo'] == 1){
                header("location:../admin.php");
            } else if($filas['id_cargo'] == 2){
                header("location:../alumno.php");
            } else {
                header("location:../signin.php");
            }
            exit();

         mysqli_free_result($resultado);

         $conn->close();
    }
    


?>