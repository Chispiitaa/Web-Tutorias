<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="recursos/BootStrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styleSign.css">
    <link rel="icon" href="recursos/monitor-de-computadora.png" type="image/x-icon">
    <title>Inicio de Sesión</title>
</head>
<body>

<header>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.php">
                <img src="recursos/logotipo_ipn.png" alt="LogoIpn" title="Logo Ipn" width="50" height="50" class="d-inline-block align-text-top">
              </a>
              <ul class="navbar-nav">
              <li class="nav-item">
                    <button type="button" class="btn btn-dark me-2" ><a href="signin_admin.php" style="text-decoration: none;  color: white;">Admin</a></button>
                </li>
              </ul>
              
              <a class="navbar-brand" href="index.php">
                <img src="recursos/escudoESCOM.png" alt="LogoEscom" title="Logo Escom" width="50" height="50" class="d-inline-block align-text-top" style="justify-content: right;">
              </a>

            </div>

        </nav>
    </header>

    <main>
        <section class="form-login">
            <h1 style="text-align:center;">Inicio de Sesión</h1>
            <form action="php/autenticar.php" method="post" class="form-floating" id="loginForm" autocomplete="off">
                <fieldset>
                    <div class="mb-3">
                        <label for="email" >Correo: </label>
                        <input class="controls" type="email" id="email" name="email" required><br><br>
                    </div>

                    <div class="mb-3">
                        <label for="password">Contraseña:</label>
                        <input class="controls" type="password" id="password" name="password" required><br><br>
                    </div>
                </fieldset>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-danger buttons" type="submit" value="Iniciar" name="iniciar">Iniciar</button>
                        </div>
                    </div>
                    
                </div>
                
            </form>
               
        </section>
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
    <br>
    </footer>
    <script src="recursos/BootStrap/js/bootstrap.min.js"></script>
</body>
</html>
