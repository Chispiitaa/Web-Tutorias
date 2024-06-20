function confirmSubmission() {
    const boleta = document.getElementById('boleta').value;
    const nombre = document.getElementById('nombre').value;
    const apePa = document.getElementById('apePa').value;
    const apeMa = document.getElementById('apeMa').value;
    const telefono = document.getElementById('telefono').value;
    const semestre = document.getElementById('semestre').value;
    const carrera = document.getElementById('carrera').value;
    const tutorGenero = document.querySelector('input[name="tutor_genero"]:checked').value;
    const tutor = document.getElementById('tutor').value;
    const tipo_tutoria = document.getElementById('tipo_tutoria').value;
    const email = document.getElementById('email').value;

    const confirmationMessage = `
        ¿Tus datos son correctos?
        \nBoleta: ${boleta}
        \nNombre: ${nombre}
        \nApellido Paterno: ${apePa}
        \nApellido Materno: ${apeMa}
        \nTeléfono: ${telefono}
        \nSemestre: ${semestre}
        \nCarrera: ${carrera}
        \nPreferencia de tutor: ${tutorGenero}
        \nTutor: ${tutor}
        \nTipo de tutoría: ${tipo_tutoria}
        \nEmail: ${email}
    `;

    if (confirm(confirmationMessage)) {
        alert("Datos registrados correctamente");
        return true;
    } else {
        return false;
    }
}