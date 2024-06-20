<?php
require 'php/conexion.php';

$id = $_GET['id'];
$sql = "SELECT * FROM registro WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $boleta = $_POST['boleta'];
    $nombre = $_POST['nombre'];
    $apePa = $_POST['apePa'];
    $apeMa = $_POST['apeMa'];
    $telefono = $_POST['telefono'];
    $semestre = $_POST['semestre'];
    $carrera = $_POST['carrera'];
    $tutor_genero = $_POST['tutor_genero'];
    $email = $_POST['email'];

    $sql = "UPDATE registro SET boleta='$boleta', nombre='$nombre', apePa='$apePa', apeMa='$apeMa', telefono='$telefono', semestre='$semestre', carrera='$carrera', tutor_genero='$tutor_genero', email='$email' WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        echo "Registro actualizado exitosamente";
        header("Location: admin.php");
    } else {
        echo "Error actualizando registro: " . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="recursos/BootStrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styleSign.css">
    <link rel="icon" href="recursos/monitor-de-computadora.png" type="image/x-icon">
    <title>Editar Registro</title>
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="recursos/logotipo_ipn.png" alt="LogoIpn" title="Logo Ipn" width="50" height="50" class="d-inline-block align-text-top">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <button type="button" class="btn btn-dark me-2"><a href="signin.php" class="btn-lore">Iniciar</a></button>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#inicio" style="color: brown;">Principal</a>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="btn btn-dark me-2"><a href="signup.php" class="btn-lore">Registrar</a></button>
                        </li>
                    </ul>
                </div>
                <a class="navbar-brand" href="">
                    <img src="recursos/escudoESCOM.png" alt="LogoEscom" title="Logo Escom" width="50" height="50" class="d-inline-block align-text-top">
                </a>
            </div>
        </nav>
    </header>
    <div class="container">
        <h1>Editar Registro</h1>
        <form action="editar.php?id=<?php echo $id; ?>" method="post">
            <div class="mb-3">
                <label for="boleta" class="form-label">Boleta</label>
                <input type="text" class="form-control" id="boleta" name="boleta" value="<?php echo $row['boleta']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $row['nombre']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="apePa" class="form-label">Apellido Paterno</label>
                <input type="text" class="form-control" id="apePa" name="apePa" value="<?php echo $row['apePa']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="apeMa" class="form-label">Apellido Materno</label>
                <input type="text" class="form-control" id="apeMa" name="apeMa" value="<?php echo $row['apeMa']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $row['telefono']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="semestre" class="form-label">Semestre</label>
                <input type="text" class="form-control" id="semestre" name="semestre" value="<?php echo $row['semestre']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="carrera" class="form-label">Carrera</label>
                <input type="text" class="form-control" id="carrera" name="carrera" value="<?php echo $row['carrera']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="tutor_genero" class="form-label">Tutor Genero</label>
                <input type="text" class="form-control" id="tutor_genero" name="tutor_genero" value="<?php echo $row['tutor_genero']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>" required>
            </div>
            <button type="submit" name="update" class="btn btn-danger buttons">Actualizar</button>
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
