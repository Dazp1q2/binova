<?php
session_start();

if (!isset($_SESSION['usuario']) || $_SESSION['usuario']['rol_id'] != 1) {
    header('Location: /views/auth/login.php');
    exit();
}

$usuario = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Arrendador</title>
    <link rel="stylesheet" href="/public/css/styles.css">
</head>
<body>
    <h1>Panel de Arrendador</h1>
    <p>Bienvenido, <?php echo $usuario['nombre_usuario']; ?>. Aquí puedes gestionar tus propiedades y arrendatarios.</p>
    <!-- Aquí van las funcionalidades específicas para arrendadores -->
    <a href="../home.php">Volver al Inicio</a>
</body>
</html>
