<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
                            <input class="buttons" type="submit" value="Iniciar" name="iniciar">
                        </div>
                        <div class="col">
                            <button class="buttons"><a href="signup.php" style="text-decoration: none; color:white;">Registrarse</a></button>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
