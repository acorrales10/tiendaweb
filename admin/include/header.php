<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactanos</title>
    <link rel="stylesheet" href="../../Css/Style.css">
    <link rel="stylesheet" href="../../Css/productos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500;600;700&display=swap" rel="stylesheet">
</head>

<header>
    <div class="logo">
        <img src="../../Recursos/logo/Logo 2.png" alt="Logo" width="80px">
    </div>
    <nav>
        <ul>
            <li><a href="../../Index.php">Inicio</a></li>
            <li><a href="../../Contactanos.php">Contactanos</a></li>
            <?php if (empty($_SESSION["rol"])) : ?>
                <li><a href="./login.php">Iniciar Sesion</a></li>
            <?php else : ?>
                <li><a href=""><?php echo $_SESSION["nombre"] . ' ' . $_SESSION["apellido1"] ?></a></li>
                <li><a href="../../controlador/cerrar_sesion.php">Cerrar Sesión</a></li>
            <?php endif; ?>
            <?php if ($_SESSION["rol"] == "ADMIN" || $_SESSION["rol"] == "admin") : ?>
                <li><a href="productos.php">Admin</a></li>
            <?php endif; ?>
            <?php if ($_SESSION["rol"] === "USER" || $_SESSION["rol"] === "user") : ?>
                <li> <img src="Recursos/ico/shopping bag.png" class="carro-compras" alt="carritoCompras" width="30px" height="30px"> </li>
            <?php endif; ?>
        </ul>
    </nav>
</header>

<body id="body-Contact">