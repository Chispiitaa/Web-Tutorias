<?php
    session_start([
        'cookie_lifetime' => 0,
    ]);
    // Verificar si el usuario está autenticado
    if (!isset($_SESSION['nombre'])) {
        header("Location: signin.php");
        exit();
    }else{
        $nombre = $_SESSION['nombre'];
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
    <title>HOME Alumno</title>
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
                    <button type="button" class="btn btn-dark"><?php echo "<a class='btn-lore' href='cerrarSesion.php?nombreSesion=$nombre'>Cerrar</a>";?></button>
                </li>
                <li class="nav-item" style="padding-left: 20px">
                    <button type="button" class="btn btn-dark"><a href="generarPDF.php" class="btn-lore">Generar PDF</a></button>
                </li>
                
              </ul>
              <a class="navbar-brand" href="">
                <img src="recursos/escudoESCOM.png" alt="LogoEscom" title="Logo Escom" width="50" height="50" class="d-inline-block align-text-top" style="justify-content: right;">
              </a>

            </div>

        </nav>
    </header>

    <main class="main-alumno">
        <h1 style="text-align:center">Bienvenid@ <?php echo $_SESSION['nombre'] ?></h1>
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