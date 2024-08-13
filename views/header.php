

<header>
    <nav>
        <div class="logo">
            <a href="#">Binova</a>
        </div>
        <div class="hamburger" id="hamburger">
            <div class="line line1"></div>
            <div class="line line2"></div>
            <div class="line line3"></div>
        </div>
        <ul class="nav-links" id="nav-links">
            <li><a href="../public/index.php">Inicio</a></li>
            <li><a href="#">Propiedades</a></li>

            <?php if (isset($_SESSION['usuario'])): ?>
                <?php if ($_SESSION['usuario']['rol_id'] == 1): ?>
                    <!-- Enlace para Arrendadores -->
                    <li><a href="../views/arrendador/panel.php">Panel de Arrendador</a></li>
                <?php elseif ($_SESSION['usuario']['rol_id'] == 2): ?>
                    <!-- Enlace para Arrendatarios -->
                    <li><a href="/views/arrendatario/panel.php">Panel de Arrendatario</a></li>
                <?php endif; ?>
                <li><a href="../controllers/AuthController.php?action=logout">Cerrar Sesión</a></li>
            <?php else: ?>
                <li><a href="../views/auth/login.php">Iniciar Sesión</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>
