<?php
session_start();

$usuario = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : null;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Binova - Página de Inicio</title>
    <link rel="stylesheet" href="../public/css/styles.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <main>
        <div class="user-info">
            <?php if ($usuario): ?>
                <h2>Bienvenido, <?php echo $usuario['nombre_usuario']; ?></h2>
            <?php else: ?>
                <h2>Bienvenido a Binova</h2>
            <?php endif; ?>
        </div>

        <div class="carousel">
            <div class="search-container">
                <input type="text" placeholder="Buscar..." class="search-input">
            </div>
            <div class="carousel-images">
                <img src="../public/img/home.jpg" alt="Imagen 1">
                <img src="../public/img/home.jpg" alt="Imagen 2">
                <img src="../public/img/home.jpg" alt="Imagen 3">
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>

    <script src="../public/js/carousel.js"></script>
    <script src="../public/js/main.js"></script>
</body>
</html>
