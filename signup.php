<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="recursos/BootStrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styleSign.css">
    <link rel="icon" href="recursos/monitor-de-computadora.png" type="image/x-icon">
    <title>Formulario de Registro</title>
</head>
<body>
    <header class="bg-light py-3">
        <nav class="container d-flex justify-content-between align-items-center">
            <a href="index.php">
                <img src="recursos/logotipo_ipn.png" alt="LogoIpn" title="Logo Ipn" width="50" height="50">
            </a>
            <a href="index.php">
                <img src="recursos/escudoESCOM.png" alt="LogoEscom" title="Logo Escom" width="50" height="50">
            </a>
        </nav>
    </header>
    <main class="flex-fill d-flex justify-content-center align-items-center py-4">
        <section class="form-register container">
            <h1 class="text-center">Formulario de Registro</h1>
            <form action="php/registro.php" method="post" class="form-floating" autocomplete="off" id="loginForm">
                <fieldset>
                    <legend>Datos personales y académicos</legend>
                    <div class="mb-3">
                        <label for="boleta">No. de boleta:</label>
                        <input class="controls form-control" type="text" id="boleta" name="boleta" pattern="\d{10}" title="El número de boleta debe tener exactamente 10 dígitos" required>
                    </div>
                    <div class="mb-3">
                        <label for="nombre">Nombre:</label>
                        <input class="controls form-control" type="text" id="nombre" name="nombre" title="El nombre solo debe contener letras" required>
                    </div>
                    <div class="mb-3">
                        <label for="apePa">Apellido Paterno:</label>
                        <input class="controls form-control" type="text" id="apePa" name="apePa" title="El apellido paterno solo debe contener letras" required>
                    </div>
                    <div class="mb-3">
                        <label for="apeMa">Apellido Materno:</label>
                        <input class="controls form-control" type="text" id="apeMa" name="apeMa" title="El apellido materno solo debe contener letras" required>
                    </div>
                    <div class="mb-3">
                        <label for="telefono">Teléfono:</label>
                        <input class="controls form-control" type="tel" id="telefono" name="telefono" pattern="\d{10}" title="El teléfono debe tener exactamente 10 dígitos" required>
                    </div>
                    <div class="mb-3">
                        <label for="semestre">Semestre:</label>
                        <select class="form-select controls" id="semestre" name="semestre" required>
                            <option value="" disabled selected>Selecciona el semestre</option>
                            <option value="1">Primero</option>
                            <option value="2">Segundo</option>
                            <option value="3">Tercero</option>
                            <option value="4">Cuarto</option>
                            <option value="5">Quinto</option>
                            <option value="6">Sexto</option>
                            <option value="7">Séptimo</option>
                            <option value="8">Octavo</option>
                            <option value="9">Noveno</option>
                            <option value="10">Décimo</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="carrera">Carrera que cursa:</label>
                        <select class="form-select controls" id="carrera" name="carrera" required>
                            <option value="" disabled selected>Selecciona la carrera</option>
                            <option value="ISC">ISC</option>
                            <option value="IIA">IIA</option>
                            <option value="LCD">LCD</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="tutor">¿Prefieres que tu tutor sea hombre o mujer?</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="tutor_hombre" name="tutor_genero" value="hombre" required>
                            <label class="form-check-label" for="tutor_hombre">Hombre</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="tutor_mujer" name="tutor_genero" value="mujer" required>
                            <label class="form-check-label" for="tutor_mujer">Mujer</label>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Cuenta</legend>
                    <div class="mb-3">
                        <label for="email">Correo electrónico institucional:</label>
                        <input class="controls form-control" type="email" id="email" name="email" pattern="^[a-zA-Z0-9._%+-]+@alumno\.ipn\.mx$" placeholder="ej: velaj1900@alumno.ipn.mx" required>
                    </div>
                    <div class="mb-3">
                        <label for="password">Contraseña:</label>
                        <input class="controls form-control" type="password" id="password" name="password" title="Debe tener al menos 8 caracteres, al menos una letra minúscula, una letra mayúscula, numero y un caracter especial." required>
                    </div>
                </fieldset>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <input class="buttons btn btn-danger w-100" type="submit" name="registrar" value="Enviar">
                        </div>
                        <div class="col">
                            <input class="buttons btn btn-danger w-100" type="reset" value="Limpiar">
                        </div>
                    </div>
                </div>
                <div id="warnings" style="color:brown;"></div>
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
                    <p><a href="https://www.escom.ipn.mx"  target="_blank">Escuela Superior de Cómputo</a></p>
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
