<?php
session_start([
    'cookie_lifetime' => 0,
]);

if (!isset($_SESSION['nombre']) || $_SESSION['nombre'] !== 'Admin') {
    header("Location: signin.php");
    exit();
}

require 'php/conexion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM tutores WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $tutor = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $genero = $_POST['genero'];

    $sql = "UPDATE tutores SET nombre='$nombre', apellido='$apellido', genero='$genero' WHERE id=$id";
    
    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="recursos/BootStrap/css/bootstrap.min.css">
    <title>Editar Tutor</title>
</head>
<body>
<div class="container mt-5">
    <h2>Editar Tutor</h2>
    <form action="editar_tutor.php" method="post">
        <input type="hidden" name="id" value="<?php echo $tutor['id']; ?>">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $tutor['nombre']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo $tutor['apellido']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="genero" class="form-label">Género</label>
            <select class="form-select" id="genero" name="genero" required>
                <option value="M" <?php if ($tutor['genero'] == 'M') echo 'selected'; ?>>Masculino</option>
                <option value="F" <?php if ($tutor['genero'] == 'F') echo 'selected'; ?>>Femenino</option>
                <option value="O" <?php if ($tutor['genero'] == 'O') echo 'selected'; ?>>Otro</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        <a href="index.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
<script src="recursos/BootStrap/js/bootstrap.min.js"></script>
</body>
</html>
