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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

</head>

<header>
    <div class="logo">
        <img src="../../Recursos/logo/Logo 2.png" alt="Logo" width="80px">
    </div>
    <nav>
        <ul>
            <li><a class="link-light" href="../../Index.php">Inicio</a></li>
            <li><a class="link-light" href="../../Contactanos.php">Contactanos</a></li>
            <?php if (empty($_SESSION["rol"])) : ?>
                <li><a class="link-light" href="./login.php">Iniciar Sesion</a></li>
            <?php else : ?>
                <li><a class="link-light" href=""><?php echo $_SESSION["nombre"] . ' ' . $_SESSION["apellido1"] ?></a></li>
                <li><a class="link-light" href="../../controlador/cerrar_sesion.php">Cerrar Sesión</a></li>
            <?php endif; ?>
            <?php if ($_SESSION["rol"] == "ADMIN" || $_SESSION["rol"] == "admin") : ?>
                <li><a class="link-light" href="../productos/productos.php">Admin Catalogo</a></li>
                <li><a class="link-light" href="../contacto/contactos.php">Admin Contactos</a></li>
            <?php endif; ?>
            <?php if ($_SESSION["rol"] === "USER" || $_SESSION["rol"] === "user") : ?>
                <li> <img src="Recursos/ico/shopping bag.png" class="carro-compras" alt="carritoCompras" width="30px" height="30px"> </li>
            <?php endif; ?>
        </ul>
    </nav>
</header>

<body id="body-Contact">