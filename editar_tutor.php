<?php
session_start([
    'cookie_lifetime' => 0,
]);

if (!isset($_SESSION['nombre']) || $_SESSION['nombre'] !== 'Admin') {
    header("Location: signin.php");
    exit();
}
$nombre = $_SESSION['nombre'];

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
    $num_alumnos = $_POST['num_alumnos'];
    $genero = $_POST['genero'];

    $sql = "UPDATE tutores SET nombre='$nombre', apellido='$apellido', num_alum='$num_alumnos', genero='$genero' WHERE id=$id";
    
    if (mysqli_query($conn, $sql)) {
        header("Location: admin.php");
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
    <link rel="stylesheet" href="css/styleIndex.css">
    <link rel="icon" href="recursos/monitor-de-computadora.png" type="image/x-icon">
    <title>Editar Tutor</title>
</head>
<body>
<header>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="recursos/logotipo_ipn.png" alt="LogoIpn" title="Logo Ipn" width="50" height="50" class="d-inline-block align-text-top">
            </a>
            <a class="navbar-brand" href="">
                <img src="recursos/escudoESCOM.png" alt="LogoEscom" title="Logo Escom" width="50" height="50" class="d-inline-block align-text-top" style="justify-content: right;">
            </a>
        </div>
    </nav>
</header>
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
            <label for="num_alumnos" class="form-label">Número de Alumnos</label>
            <input type="number" class="form-control" id="num_alumnos" name="num_alumnos" value="<?php echo $tutor['num_alum']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="genero" class="form-label">Género</label>
            <select class="form-select" id="genero" name="genero" required>
                <option value="hombre" <?php if ($tutor['genero'] == 'hombre') echo 'selected'; ?>>Hombre</option>
                <option value="mujer" <?php if ($tutor['genero'] == 'mujer') echo 'selected'; ?>>Mujer</option>
            </select>
        </div>
        <button type="submit" class="btn btn-danger bottons">Guardar Cambios</button>
        <a href="admin.php" class="btn btn-danger bottons">Cancelar</a>
    </form>
</div>
<footer class="bg-body-tertiary py-3 mt-4">
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <a href="https://www.ipn.mx" target="_blank">
                    <img src="recursos/logotipo_ipn.png" alt="Logo IPN" title="IPN" width="50" height="50">
                </a>
                <p><a href="https://www.ipn.mx" target="_blank">Instituto Politécnico Nacional</a></p>
            </div>
            <div class="col">
                <a href="https://www.escom.ipn.mx" target="_blank">
                    <img src="recursos/escudoESCOM.png" alt="Logo ESCOM" title="ESCOM" width="50" height="50">
                </a>
                <p><a href="https://www.escom.ipn.mx" target="_blank">Escuela Superior de Cómputo</a></p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <p>Producto Registrado &copy; 2024. Todos los Derechos Reservados.</p>
            </div>
        </div>
    </div>
</footer>
<script src="recursos/BootStrap/js/bootstrap.min.js"></script>
</body>
</html>
