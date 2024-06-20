<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="recursos/BootStrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styleIndex.css">
    <link rel="icon" href="recursos/monitor-de-computadora.png" type="image/x-icon">
    <title>Inicio</title>
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
    
    <section class="hero" id="inicio">
        <div class="video-container">
            <video src="recursos/pit.mp4" autoplay loop muted></video>
            <div class="overlay"></div>
            <div class="content">
                <h1>Programa Institucional de Tutorías</h1>
            </div>
        </div>
    </section>

    <main class="container mt-5">
        <section id="about">
            <h2>Sobre el PIT</h2>
            
            <div class="card mt-4">
            <img src="recursos/SADPIT.jpg" class="card-img-top" alt="SADPIT" title="SADPIT">
                <div class="card-body">
                <p>
                La tutoría en la educación superior se define como un acompañamiento personalizado proporcionado por un profesor capacitado, cuyo objetivo es apoyar el desarrollo integral del estudiante, promoviendo su crecimiento, madurez, y la adopción de actitudes de responsabilidad y libertad (ANUIES, 2012).
            </p>
                    <p>
                        La evolución de la era digital ha dictado una nueva forma de organización en la educación formal para atender los nuevos requerimientos de la sociedad, llevando a un replanteamiento de la formación profesional. Estos acelerados cambios obligan a reformular la dinámica entre la enseñanza y el aprendizaje. Es por ello la necesidad de implementar mecanismos de apoyo a los estudiantes que les brinde un acompañamiento personalizado durante su trayectoria académica, así como el reforzamiento de la figura de los docentes tutores que participan en las actividades de formación.
                    </p>
                    <p>
                        En este contexto, una de las acciones que se han implementado para dar cumplimiento a la misión institucional, son actividades que proporcionan un acompañamiento académico y personal a los alumnos de los niveles Media Superior y Superior para que, a lo largo de su trayectoria escolar, cuenten con estrategias de apoyo para mejorar la adquisición, desarrollo y fortalecimiento de conocimientos, habilidades y actitudes que conlleven al logro del aprendizaje significativo y autónomo.
                    </p>
                    <p>
                        Sin perder de vista que cada Unidad Académica posee su propia dinámica interna, como características particulares de su población estudiantil y docente, del entorno que los rodea y demás factores que, sin duda le dan una personalidad; también existen puntos de coincidencia, siendo el más importante, que todo programa educativo alcanza sus metas en la medida que el alumnado tiene una trayectoria educativa exitosa; si un alumno fracasa académicamente, también fracasa la institución que no ha sido capaz de cumplir su cometido.
                    </p>
                    <p>
                        Por ello, la importancia de establecer acuerdos de forma colegiada, buscando estrategias para revertir situaciones que ponen en riesgo la permanecía de los alumnos. Esto se logra a partir de un plan de trabajo general que derive en planes particulares y liderado por la máxima autoridad de cada Unidad Académica, impulsando así, la participación activa de los subdirectores, jefes de departamento, responsables de servicios de atención a los alumnos y academias.
                    </p>
                </div>
            </div>
        </section>

        <section id="types-of-tutoring" class="mt-5">
            <h2>Tipos de Tutorías</h2>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card mb-4">
                        <img src="recursos/Designer.jpeg" class="card-img-top" alt="Tutoría Individual" title="Tutoría Individual">
                        <div class="card-body">
                            <h5 class="card-title">Tutoría Individual</h5>
                            <p class="card-text">Es un acompañamiento académico, personal o ambos que se realiza a lo largo del periodo escolar a petición de un alumno, quien ha identificado al tutor que puede apoyarlo en los temas de su interés.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card mb-4">
                        <img src="recursos/Designer (1).jpeg" class="card-img-top" alt="Tutoría Grupal" title="Tutoría Grupal">
                        <div class="card-body">
                            <h5 class="card-title">Tutoría Grupal</h5>
                            <p class="card-text">Es la actividad de acompañamiento durante todo el periodo escolar, a un grupo validado y autorizado en la estructura académica, en cualquier modalidad y contenido dentro de su carga académica.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card mb-4">
                        <img src="recursos/Designer (2).jpeg" class="card-img-top" alt="Tutoría de Recuperación Académica" title="Tutoría de Recuperación Académica">
                        <div class="card-body">
                            <h5 class="card-title">Tutoría de Recuperación Académica</h5>
                            <p class="card-text">Es la acción dirigida a grupos de alumnos con dictamen de la Comisión de Situación Escolar (COSIE), en riesgo de rezago, abandono o que han recursado una Unidad de Aprendizaje y no la acreditaron.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="card mb-2">
                        <img src="recursos/Designer (3).jpeg" class="card-img-top" alt="Tutoría de Regularización" title="Tutoría de Regularización">
                        <div class="card-body">
                            <h5 class="card-title">Tutoría de Regularización</h5>
                            <p class="card-text">Es la acción dirigida a un grupo de alumnos que requieren reafirmar conocimientos, que no hayan acreditado su unidad de aprendizaje, por temas específicos de difícil comprensión.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="card mb-2">
                        <img src="recursos/Designer (4).jpeg" class="card-img-top" alt="Tutoría entre Pares" title="Tutoría entre Pares">
                        <div class="card-body">
                            <h5 class="card-title">Tutoría entre Pares</h5>
                            <p class="card-text">Esta actividad es desempeñada por alumnos con buen dominio en determinadas unidades de aprendizaje, las cuales frecuentemente tienen alto índice de reprobación.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="types-of-intervention" class="mt-5">
            <h2>Tipos de Intervención</h2>
            <div class="card">
                <div class="card-body">
                    <ul>
                        <li><strong>Inductiva:</strong> Acciones que facilitan la adaptación del alumno al nuevo entorno escolar y a su modalidad educativa.</li>
                        <li><strong>Preventiva:</strong> Acciones dirigidas al alumno que evitan riesgo de rezago, reprobación o abandono.</li>
                        <li><strong>Correctiva:</strong> Se dirige a los alumnos que necesitan orientación y apoyo para recuperar su trayectoria académica.</li>
                    </ul>
                </div>
            </div>
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
    <script src="js/scriptIndex.js"></script>
</body>
</html>
