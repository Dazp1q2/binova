<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="../../public/css/log.css">
    <script src="../../public/js/validations.js" defer></script>
</head>
<body>
    <h2>Registro de Usuario</h2>
    <form action="../../controllers/AuthController.php?action=register" method="POST" onsubmit="return validarRegistro()">
        <input type="text" name="nombre_usuario" placeholder="Nombre de usuario" required>
        <input type="email" name="correo" placeholder="Correo electrónico" required>
        <input type="password" name="contrasena" placeholder="Contraseña" required>
        <input type="password" name="confirmar_contrasena" placeholder="Confirmar contraseña" required>
        <select name="rol" required>
            <option value="arrendador">Arrendador</option>
            <option value="arrendatario">Arrendatario</option>
        </select>
        <button type="submit">Registrarse</button>
    </form>
</body>
</html>
