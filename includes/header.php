<?php
$pagina_actual = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/logo/logo_icono.png">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <title>ME - Servicio Técnico Informático</title>
    <link rel="stylesheet" href="../assets/vendor/fontawesome/css/all.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg sticky-top">
    <div class="container"> <a class="navbar-brand" href="index.php">
            <img src="assets/img/logo/logo_me.png" alt="Logo" class="logo-navbar">
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?php echo ($pagina_actual == 'index.php') ? 'active' : ''; ?>" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($pagina_actual == 'servicios.php') ? 'active' : ''; ?>" href="servicios.php">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($pagina_actual == 'nosotros.php') ? 'active' : ''; ?>" href="nosotros.php">Sobre mí</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($pagina_actual == 'contacto.php') ? 'active' : ''; ?>" href="contacto.php">Contacto</a>
                </li>
                <button id="btn-theme" class="btn border-0 text-lila fs-5 p-0 me-3" title="Cambiar modo">
                        <i id="theme-icon" class="fas fa-moon"></i>
                    </button>
            </ul>
        </div>
    </div>
</nav>
    