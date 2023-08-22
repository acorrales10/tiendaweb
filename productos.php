<?php

/// requires
require_once './DAL/producto.php';
$productos = obtenerProductos();

include_once './include/header_prod.php';

if ($carrito != null) {
    $lineas = obtenerLineasXFactura($carrito->id);
}
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
                    <?php if (!empty($_SESSION["rol"]) &&  ($_SESSION["rol"] == "user" || $_SESSION["rol"] == "USER")) : ?>
                        <a href="./php/procesarAgregarCarrito.php?idFactura=<?php echo $carrito->id; ?>&idProducto=<?php echo $row["id"]; ?>&cantidad=1&precio=<?php echo $row["precio"]; ?>&total=<?php echo $row["precio"]; ?>&lineas=<?php echo $carrito->lineas; ?>" class="boton-item">Agregar al Carrito</a>
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
                <?php if($lineas != null) :?>
                <?php while ($rowLinea = $lineas->fetch_assoc()) : ?>
                    <div class="carrito-item">
                        <img src="<?php echo $rowLinea["imagen"]; ?>" width="80px" alt="">
                        <div class="carrito-item-detalles">
                            <span class="carrito-item-titulo"><?php echo $rowLinea["descripcion"]; ?></span>
                            <div class="selector-cantidad">
                                <!-- <i class="fa-solid fa-minus restar-cantidad"></i> -->
                                <input type="text" value="<?php echo $rowLinea["cantidad"]; ?>" class="carrito-item-cantidad" disabled>
                                <!-- <i class="fa-solid fa-plus sumar-cantidad"></i> -->
                            </div>
                            <span class="carrito-item-precio">₡<?php echo  number_format($rowLinea["total"], 2, ',', '.'); ?></span>
                        </div>
                        <a href="./php/procesarEliminarCarrito.php?idFactura=<?php echo $carrito->id; ?>&linea=<?php echo $rowLinea["id"]; ?>&lineas=<?php echo $carrito->lineas; ?>"><span class="btn-eliminar">
                            <i class="fa-solid fa-trash"></i>
                        </span></a>
                    </div>

                <?php endwhile ?>
                <?php endif ?>
                <!--                 
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
            <form  action="./php/procesarPagarFactura.php" method="get" name="finalizar" >
                <div class="fila">
                    <strong>Tu Total</strong>
                    <span class="carrito-precio-total">
                        $120.000,00
                    </span>
                    <input type="number"  hidden class="carrito-precio-total-numero"  name="total" id="totalFactura">
                    <?php
                    if ($carrito != null):
                        ?>
                    <input type="number" value="<?php echo $carrito->id?>" hidden name="idFactura"/>
                    <?php  endif?>
                </div>
                <button type="submit" class="btn-pagar">Pagar <i class="fa-solid fa-bag-shopping"></i> </button>
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
<?php
if (!empty($_SESSION["id"])) {
    echo "<script> window.onload = function() {
        actualizarTotalCarrito();
        hacerVisibleCarrito();
    }; </script>";
}
?>
</body>

</html>