<?php

/// requires
require_once './DAL/producto.php';

$productos = obtenerProductos();
include_once './include/header_prod.php';
?>
</div>
<div class="small-container">
    <hr class="separador">
    <h2 class="title">Productos</h2>
    <section class="contenedor">
        <!-- Contenedor de elementos -->
        <div class="contenedor-items">
            <?php while ($row = $productos->fetch_assoc()) : ?>
                <div class="item">
                    <span class="titulo-item"><?php echo $row["marca"] . " - " . $row["descripcion"]; ?></span>
                    <img src="<?php echo $row["imagen"]; ?>" alt="" class="img-item">
                    <span class="precio-item">₡<?php echo  number_format($row["precio"], 2, ',', '.'); ?></span>
                    <?php if (!empty($_SESSION["rol"])) : ?>
                    <button class="boton-item">Agregar al Carrito</button>
                    <?php endif ?>
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
</div>

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