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
$id_tutor = $_POST['id_tutor'];

$sql = "INSERT INTO registro (boleta, nombre, apePa, apeMa, telefono, semestre, carrera, tutor_genero, email, password, id_cargo, id_tutor)
VALUES ('$boleta', '$nombre', '$apePa', '$apeMa', '$telefono', $semestre, '$carrera', '$tutor_genero', '$email', '$password', 2, $id_tutor)";

if ($conn->query($sql) === TRUE) {
    // Actualizar el número de alumnos del tutor
    $updateTutorSql = "UPDATE tutores SET num_alum = num_alum + 1 WHERE id = $id_tutor";
    $conn->query($updateTutorSql);

    echo "<script>alert('Usuario registrado');</script>";
    header("location:../signin.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
