<!DOCTYPE html>
<html lang="en">
<?php
session_start();

require_once './DAL/factura.php';

if(!empty($_SESSION["id"])){
    $carrito = obtenerOCrearBorrador($_SESSION["id"]);
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/Style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <!---------  Header  -------->

    <div class="Main-content">
        <header>
            <div class="logo">
                <img src="Recursos/logo/Logo 2.png" alt="Logo" width="80px">
            </div>
            <nav>
                <ul>
                    <li><a href="./index.php">Inicio</a></li>
                    <li><a href="./productos.php">Productos</a></li>
                    <li><a href="./Mision_Vision.php">Nosotros</a></li>
                    <li><a href="./Contactanos.php">Contactanos</a></li>
                    <?php if (empty($_SESSION["rol"])) : ?>
                    <li><a href="./login.php">Iniciar Sesion</a></li>
                    <?php else : ?>
                        <li><a href="./cuenta.php"><?php echo $_SESSION["nombre"] . ' '. $_SESSION["apellido1"] ?></a></li>    
                        <li><a href="./controlador/cerrar_sesion.php">Cerrar Sesión</a></li>
                    <?php endif; ?>
                    <?php if ($_SESSION["rol"] == "ADMIN" || $_SESSION["rol"] == "admin") : ?>
                        <li><a href="./admin/productos/productos.php">Admin Catalogo</a></li>
                        <li><a class="link-light" href="./admin/contacto/contactos.php">Admin Contactos</a></li>
                    <?php endif; ?>
                    <?php if ($_SESSION["rol"] == "USER" || $_SESSION["rol"] == "user") : ?>
                        <li><a href="./productos.php"> <?php echo $carrito->lineas ?><img src="Recursos/ico/shopping bag.png" class="carro-compras" alt="carritoCompras" width="30px" height="30px"> </a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </header>