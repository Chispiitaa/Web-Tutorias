<?php
require 'php/conexion.php';

$id = $_GET['id'];

// Primero obtenemos el ID del tutor al que estaba asignado el alumno
$sql_get_tutor = "SELECT id_tutor FROM registro WHERE id = '$id'";
$result = mysqli_query($conn, $sql_get_tutor);
if ($result) {
    $row = mysqli_fetch_assoc($result);
    $tutor_id = $row['id_tutor'];

    // Eliminamos el registro del alumno
    $sql_delete_alumno = "DELETE FROM registro WHERE id = '$id'";
    if (mysqli_query($conn, $sql_delete_alumno)) {
        // Decrementamos el número de alumnos del tutor si el tutor_id no es NULL
        if ($tutor_id !== NULL) {
            $sql_decrement_tutor = "UPDATE tutores SET num_alum = num_alum - 1 WHERE id = '$tutor_id' AND num_alum > 0";
            if (mysqli_query($conn, $sql_decrement_tutor)) {
                echo "Registro eliminado exitosamente y num_alum actualizado";
                header("Location: admin.php");
                exit();
            } else {
                echo "Error actualizando num_alum del tutor: " . mysqli_error($conn);
            }
        } else {
            echo "Registro eliminado exitosamente";
            header("Location: admin.php");
            exit();
        }
    } else {
        echo "Error eliminando registro: " . mysqli_error($conn);
    }
} else {
    echo "Error obteniendo id_tutor: " . mysqli_error($conn);
}

$conn->close();
?>
