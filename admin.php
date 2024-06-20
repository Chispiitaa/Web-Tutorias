<?php
session_start([
    'cookie_lifetime' => 0,
]);

// Verificar si el usuario está autenticado y si tiene el rol de admin
if (!isset($_SESSION['nombre']) || $_SESSION['nombre'] !== 'Admin') {
    header("Location: signin.php");
    exit();
}

$nombre = $_SESSION['nombre'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="recursos/BootStrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styleIndex.css">
    <link rel="icon" href="recursos/monitor-de-computadora.png" type="image/x-icon">
    
    <title>HOME ADMIN</title>
</head>
<body>
<header>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="recursos/logotipo_ipn.png" alt="LogoIpn" title="Logo Ipn" width="50" height="50" class="d-inline-block align-text-top">
            </a>
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: brown;">Principal</a>
                </li>
                <li class="nav-item">
                    <button type="button" class="btn btn-dark"><?php echo "<a class='btn-lore' href='cerrarSesion.php?nombreSesion=$nombre'>CERRAR</a>"; ?></button>
                </li>
            </ul>
            <a class="navbar-brand" href="">
                <img src="recursos/escudoESCOM.png" alt="LogoEscom" title="Logo Escom" width="50" height="50" class="d-inline-block align-text-top" style="justify-content: right;">
            </a>
        </div>
    </nav>
</header>
<main>
    <div class="container-admin">
        <h1 style="text-align:center">Bienvenido <?php echo $nombre ?></h1>
        <div class="table-responsive mt-4" style="margin: 0 auto; width: 95%;">
            <h1 style="text-align:center">Tabla de registros</h1>
            <table class="table table-info table-hover table-striped mx-auto">
            <thead>
    <tr>
        <th>id</th>
        <th>boleta</th>
        <th>nombre</th>
        <th class="d-none d-md-table-cell">apePa</th>
        <th class="d-none d-md-table-cell">apeMa</th>
        <th class="d-none d-lg-table-cell">telefono</th>
        <th class="d-none d-lg-table-cell">semestre</th>
        <th>carrera</th>
        <th class="d-none d-xl-table-cell">tutor_genero</th>
        <th>tutor</th>
        <th class="d-none d-xl-table-cell">tutoria</th>
        <th>email</th>
        <th>Acciones</th>
    </tr>
</thead>
<tbody>
    <?php
    require 'php/conexion.php';
    $sql = "SELECT registro.*, tutores.nombre AS tutor_nombre 
            FROM registro 
            LEFT JOIN tutores ON registro.id_tutor = tutores.id";
    $result = mysqli_query($conn, $sql);
    while($mostrar = mysqli_fetch_array($result)) {
    ?>
    <tr>
        <td><?php echo $mostrar['id'] ?></td>
        <td><?php echo $mostrar['boleta'] ?></td>
        <td><?php echo $mostrar['nombre'] ?></td>
        <td class="d-none d-md-table-cell"><?php echo $mostrar['apePa'] ?></td>
        <td class="d-none d-md-table-cell"><?php echo $mostrar['apeMa'] ?></td>
        <td class="d-none d-lg-table-cell"><?php echo $mostrar['telefono'] ?></td>
        <td class="d-none d-lg-table-cell"><?php echo $mostrar['semestre'] ?></td>
        <td><?php echo $mostrar['carrera'] ?></td>
        <td class="d-none d-xl-table-cell"><?php echo $mostrar['tutor_genero'] ?></td>
        <td><?php echo $mostrar['tutor_nombre'] ?></td>
        <td class="d-none d-xl-table-cell"><?php echo $mostrar['tipo_tutoria'] ?></td>
        <td><?php echo $mostrar['email'] ?></td>
        <td>
            <a href="editar.php?id=<?php echo $mostrar['id']; ?>" class="btn btn-primary btn-sm">Editar</a>
            <a href="eliminar.php?id=<?php echo $mostrar['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Está seguro de que desea eliminar este registro?');">Eliminar</a>
        </td>
    </tr>
    <?php
    }
    mysqli_free_result($result);
    ?>
</tbody>
            </table>
        </div>
        <div class="table-responsive mt-4" style="margin: 0 auto; width: 95%;">
            <h1 style="text-align:center">Tabla de tutores</h1>
            <table class="table table-info table-hover table-striped mx-auto">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>nombre</th>
                        <th>apellido</th>
                        <th>num_alum</th>
                        <th>genero</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM tutores";
                    $result = mysqli_query($conn, $sql);
                    while($mostrar = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $mostrar['id'] ?></td>
                        <td><?php echo $mostrar['nombre'] ?></td>
                        <td><?php echo $mostrar['apellido'] ?></td>
                        <td><?php echo $mostrar['num_alum']?></td>
                        <td><?php echo $mostrar['genero'] ?></td>
                        <td>
                            <a href="editar_tutor.php?id=<?php echo $mostrar['id']; ?>" class="btn btn-primary btn-sm">Editar</a>
                            <a href="eliminar_tutor.php?id=<?php echo $mostrar['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Está seguro de que desea eliminar este tutor?');">Eliminar</a>
                        </td>
                    </tr>
                    <?php
                    }
                    mysqli_free_result($result);
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</main>

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
<script src="js/validation.js"></script>
</body>
</html>
