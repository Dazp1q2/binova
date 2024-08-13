<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="../../public/css/log.css">
    <script src="../../public/js/validations.js" defer></script>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <form action="../../controllers/AuthController.php?action=login" method="POST" onsubmit="return validarLogin()">
        <input type="text" name="input" placeholder="Correo o nombre de usuario" required>
        <input type="password" name="contrasena" placeholder="Contraseña" required>
        <button type="submit">Iniciar Sesión</button>
    </form>
    <a href="auth/recover_password.php">¿Olvidaste tu contraseña?</a>
    <a href="register.php">Registrarse</a>
    <a href="../../public/index.php">Inicio</a>
</body>
</html>
