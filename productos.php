<!DOCTYPE html>
<html lang="es">
<?php

/// requires
require_once './DAL/producto.php';

$productos = obtenerProductos();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="Css/productos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500;600;700&display=swap" rel="stylesheet">

    <title>Productos</title>
</head>

<body>

    <div class="Main-content">
        <header>
            <div class="logo">
                <img src="Recursos/logo/Logo 2.png" alt="Logo" width="80px">
            </div>
            <nav>
                <ul>
                    <li><a href="Index.html">Inicio</a></li>
                    <li><a href="productos.php">Productos</a></li>
                    <li><a href="Mision_Vision.html">Nosotros</a></li>
                    <li><a href="Contactanos.html">Contactanos</a></li>
                    <li><a href="">Cuenta</a></li>
                </ul>
            </nav>
            <img src="Recursos/ico/shopping bag.png" class="carro-compras" alt="carritoCompras" width="30px" height="30px">
        </header>



        <section class="contenedor">
            <!-- Contenedor de elementos -->
            <div class="contenedor-items">
                <?php while ($row = $productos->fetch_assoc()) : ?>
                    <div class="item">
                        <span class="titulo-item"><?php echo $row["marca"] . " - " . $row["descripcion"]; ?></span>
                        <img src="<?php echo $row["imagen"]; ?>" alt="" class="img-item">
                        <span class="precio-item">₡ <?php echo  number_format($row["precio"], 2, ',', '.'); ?></span>
                        <button class="boton-item">Agregar al Carrito</button>
                    </div>
                <?php endwhile ?>
            </div>
            <!-- Carrito de Compras -->
            <div class="carrito" id="carrito">
                <div class="header-carrito">
                    <h2>Tu Carrito</h2>
                </div>

                <div class="carrito-items">
                    <!-- 
                <div class="carrito-item">
                    <img src="img/boxengasse.png" width="80px" alt="">
                    <div class="carrito-item-detalles">
                        <span class="carrito-item-titulo">Box Engasse</span>
                        <div class="selector-cantidad">
                            <i class="fa-solid fa-minus restar-cantidad"></i>
                            <input type="text" value="1" class="carrito-item-cantidad" disabled>
                            <i class="fa-solid fa-plus sumar-cantidad"></i>
                        </div>
                        <span class="carrito-item-precio">$15.000,00</span>
                    </div>
                   <span class="btn-eliminar">
                        <i class="fa-solid fa-trash"></i>
                   </span>
                </div>
                <div class="carrito-item">
                    <img src="img/skinglam.png" width="80px" alt="">
                    <div class="carrito-item-detalles">
                        <span class="carrito-item-titulo">Skin Glam</span>
                        <div class="selector-cantidad">
                            <i class="fa-solid fa-minus restar-cantidad"></i>
                            <input type="text" value="3" class="carrito-item-cantidad" disabled>
                            <i class="fa-solid fa-plus sumar-cantidad"></i>
                        </div>
                        <span class="carrito-item-precio">$18.000,00</span>
                    </div>
                   <button class="btn-eliminar">
                        <i class="fa-solid fa-trash"></i>
                   </button>
                </div>
                 -->
                </div>
                <div class="carrito-total">
                    <div class="fila">
                        <strong>Tu Total</strong>
                        <span class="carrito-precio-total">
                            $120.000,00
                        </span>
                    </div>
                    <button class="btn-pagar">Pagar <i class="fa-solid fa-bag-shopping"></i> </button>
                </div>
            </div>
        </section>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col-1">
                        <h3>Descarga nuestra APP</h3>
                        <p>Actualmente disponible para teléfonos inteligentes Android y IOS</p>
                        <div class="app-logo">
                            <img src="Recursos/logo/playstore logo PNG.png" alt="Play Store logo">
                            <img src="Recursos/logo/appstore logo PNG.png" alt="App Store logo">
                        </div>
                    </div>
                    <div class="footer-col-2">
                        <img src="Recursos/logo/Logo.png" alt="Logo mobile">
                        <p>Estamos ubicados de la Entrada del Barrio Chino, Avenida Segunda, 50 m al Norte, Comercial
                            Nueva
                            Era
                            <br>Horario: Lunes a Sábado 9 AM a 7 PM / Domingo 10 AM a 6 PM.
                        </p>
                    </div>
                    <div class="footer-col-3">
                        <h3>Links</h3>
                        <ul>
                            <li>Cupones</li>
                            <li>Blog Post</li>
                            <li>Politicas</li>
                            <li>Afiliate ahora!</li>
                        </ul>

                    </div>
                    <div class="footer-col-4">
                        <h3>Siguenos en Redes</h3>
                        <ul>
                            <li>Facebook</li>
                            <li>Instagram</li>
                            <li>TikTok</li>
                            <li>YouTube</li>
                        </ul>
                    </div>
                </div>
                <hr>
                <p class="copyright">Copyright 2023 - Nicole
                    <br>Amy Corrales
            </div>
    </div>
    </footer>

    <script src="Js/app.js" async></script>
</body>

</html>