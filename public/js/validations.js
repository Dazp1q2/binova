function validarRegistro() {
    const contrasena = document.querySelector('input[name="contrasena"]').value;
    const confirmarContrasena = document.querySelector('input[name="confirmar_contrasena"]').value;

    if (contrasena !== confirmarContrasena) {
        alert('Las contraseñas no coinciden.');
        return false;
    }

    if (contrasena.length < 8 || !/\d/.test(contrasena) || !/[a-zA-Z]/.test(contrasena)) {
        alert('La contraseña debe tener al menos 8 caracteres, incluyendo letras y números.');
        return false;
    }

    return true;
}

function validarLogin() {
    const input = document.querySelector('input[name="input"]').value;
    const contrasena = document.querySelector('input[name="contrasena"]').value;

    if (input.trim() === '' || contrasena.trim() === '') {
        alert('Todos los campos son obligatorios.');
        return false;
    }

    return true;
}
