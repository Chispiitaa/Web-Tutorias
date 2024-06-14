document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('loginForm');
    const boleta = document.getElementById('boleta');
    const nombre = document.getElementById("nombre");
    const apePat = document.getElementById("apePa");
    const apeMat = document.getElementById("apeMa");
    const email = document.getElementById("email");
    const pass = document.getElementById("password");

    form.addEventListener("submit", async function(e) {
        e.preventDefault(); // Prevent form submission to validate first
        let warnings = "";
        let entrar = false;
        let valid = true;
        let regexEmail = /^[a-zA-Z0-9._%+-]+@alumno\.ipn\.mx$/;
        const regexPass = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
        let regexBol = /^(201[3-9]|202[0-3])\d{6}$/;
        
        // Reset error message
        document.getElementById('error-message').innerHTML = "";
        document.getElementById('error-message').style.display = 'none';

        if(!regexBol.test(boleta.value)){
            warnings += 'La boleta es inválida<br>';
            entrar = true;
        }

        // Verificación de campos de texto
        const textPattern = /^[A-Za-z\sáéíóúÁÉÍÓÚñÑ]+$/;
        if (!textPattern.test(nombre.value)) {
            warnings += 'El nombre solo debe contener letras, espacios y acentos.<br>';
            entrar = true;
        }
        if (!textPattern.test(apePat.value)) {
            warnings += 'El apellido paterno solo debe contener letras, espacios y acentos.<br>';
            entrar = true;
        }
        if (!textPattern.test(apeMat.value)) {
            warnings += 'El apellido materno solo debe contener letras, espacios y acentos.<br>';
            entrar = true;
        }

        if(!regexEmail.test(email.value)) {
            warnings += 'El email no tiene el dominio correcto<br>';
            entrar = true;
        }

        if(!regexPass.test(pass.value)) {
            warnings += 'La contraseña no es correcta<br>';
            entrar = true;
        }

        // Verificar existencia de boleta en la base de datos
        if (!entrar) {
            const response = await fetch('php/check.php', {
                method: 'POST',
                body: new URLSearchParams({ boleta: boleta.value })
            });
            const result = await response.text();
            if (result === 'exists') {
                valid = false;
                warnings += 'El número de boleta ya está registrado.<br>';
            }
        }

        if (entrar || !valid) {
            document.getElementById('error-message').innerHTML = warnings;
            document.getElementById('error-message').style.display = 'block';
        } else {
            form.submit();
        }
    });
});
