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
    <section class="form-register">
        <h1 style="text-align:center">Formulario de Registro</h1>
        <form action="php/registro.php" method="post" class="form-floating" autocomplete="off" id="loginForm">
            <fieldset>
                <legend>Datos personales y académicos</legend>
                <div class="mb-3">
                    <label for="boleta">No. de boleta:</label>
                    <input class="controls" type="text" id="boleta" name="boleta" pattern="\d{10}" title="El número de boleta debe tener exactamente 10 dígitos" required><br><br>
                </div>
                <div class="mb-3">
                    <label for="nombre">Nombre:</label>
                    <input class="controls" type="text" id="nombre" name="nombre" title="El nombre solo debe contener letras" required><br><br>
                </div>
                <div class="mb-3">
                    <label for="apePa">Apellido Paterno:</label>
                    <input class="controls" type="text" id="apePa" name="apePa" title="El apellido paterno solo debe contener letras" required><br><br>
                </div class="mb-3">
                <div class="mb-3">
                    <label for="apeMa">Apellido Materno:</label>
                    <input class="controls" type="text" id="apeMa" name="apeMa" title="El apellido materno solo debe contener letras" required><br><br>
                </div>
                <div class="mb-3">
                    <label for="telefono">Teléfono:</label>
                    <input class="controls" type="tel" id="telefono" name="telefono" pattern="\d{10}" title="El teléfono debe tener exactamente 10 dígitos" required><br><br>
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
                        <input class="form-check-input " type="radio" id="tutor_mujer" name="tutor_genero" value="mujer" required>
                        <label class="form-check-label" for="tutor_mujer">Mujer</label>
                    </div>
                </div>
                <!-- Añadir este div para el selector de tutores debajo de la selección de género del tutor -->
                <div class="mb-3" id="tutorContainer" style="display: none;">
                    <label for="tutor">Selecciona tu tutor:</label>
                    <select class="form-select controls" id="tutor" name="id_tutor" required>
                        <option value="" disabled selected>Selecciona un tutor</option>
                    </select>
                </div>
            </fieldset>
            <fieldset>
                <legend>Cuenta</legend>
                <div class="mb-3">
                    <label for="email">Correo electrónico institucional:</label>
                    <input class="controls" type="email" id="email" name="email" placeholder="ej: velaj1900@alumno.ipn.mx" required><br><br>
                </div>
                <div class="mb-3"> 
                    <label for="password">Contraseña:</label>
                    <input class="controls" type="password" id="password" name="password" title="Debe tener al menos 8 caracteres, al menos una letra minúscula, una letra mayúscula, numero y un caracter especial." required><br><br>
                </div>
            </fieldset>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <button class="btn btn-danger buttons" type="submit" name="registrar" value="Enviar">Registrar</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-danger buttons" type="reset" value="Limpiar">Limpiar</button>
                    </div>
                </div>
            </div>
            <!-- Mover el área de warnings aquí -->
            <div id="warnings" class="alert alert-danger mt-3" style="display: none;"></div>
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
</footer>
<script src="recursos/BootStrap/js/bootstrap.min.js"></script>
<script src="js/validation.js"></script>
<!-- Aquí añadimos el script JavaScript para manejar la selección de tutores -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    const tutorGeneroInputs = document.querySelectorAll('input[name="tutor_genero"]');
    const tutorContainer = document.getElementById("tutorContainer");
    const tutorSelect = document.getElementById("tutor");

    tutorGeneroInputs.forEach(input => {
        input.addEventListener("change", function() {
            const genero = this.value;
            fetchTutores(genero);
        });
    });

    function fetchTutores(genero) {
        fetch(`php/get_tutores.php?genero=${genero}`)
            .then(response => response.json())
            .then(data => {
                // Limpiar las opciones anteriores
                tutorSelect.innerHTML = '<option value="" disabled selected>Selecciona un tutor</option>';

                // Añadir las nuevas opciones
                data.forEach(tutor => {
                    const option = document.createElement("option");
                    option.value = tutor.id;
                    option.textContent = `${tutor.nombre} ${tutor.apellido}`;
                    tutorSelect.appendChild(option);
                });

                // Mostrar el contenedor de tutores
                tutorContainer.style.display = "block";
            })
            .catch(error => console.error('Error fetching tutores:', error));
    }
});
</script>
</body>
</html>
