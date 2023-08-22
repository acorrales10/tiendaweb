<?php

/// requires
include_once "./include/header.php";
require_once './DAL/producto.php';

$productos = obtenerProductosDestacados();
$productosRecientes = obtenerProductosRecientes();
?>
<div class="container">
    <div class="Main-container">
        <div class="Main-row">
            <div class="Main-col">
                <h1>Tecnología fuera de este mundo!</h1>
                <button class="btn"><span>Comprar ahora!</span> &#8594;</button>
            </div>
            <div class="col-2">
                <video autoplay loop muted>
                    <source src="Recursos/video/Alienware Area-51m Product Video.mp4">
                    Tu navegador no es compatible con videos en HTML5
                </video>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!---------  Productos destacados  -------->
<div class="small-container">
    <hr class="separador">
    <h2 class="title">Productos Destacados</h2>
    <div class="row">
        <?php while ($row = $productos->fetch_assoc()) : ?>
            <div class="col-4">
                <a href="./productos.php"><img src="<?php echo $row["imagen"]; ?>" alt="<?php echo $row["descripcion"]; ?>"> </a>
                <h4><?php echo $row["descripcion"]; ?></h4>
                <p>₡<?php echo  number_format($row["precio"], 2, ',', '.'); ?></p>
            </div>
        <?php endwhile; ?>
    </div>
    <hr class="separador">
    <h2 class="title">Ultimos Productos</h2>
    <div class="row">
        <?php while ($row = $productosRecientes->fetch_assoc()) : ?>
            <div class="col-4">
                <a href="./productos.php"><img src="<?php echo $row["imagen"]; ?>" alt="<?php echo $row["descripcion"]; ?>"> </a>
                <h4><?php echo $row["descripcion"]; ?></h4>
                <p>₡<?php echo  number_format($row["precio"], 2, ',', '.'); ?></p>
            </div>
        <?php endwhile; ?>
    </div>
</div>

<!---------  Oferta  -------->

<div class="offer">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
                <img src="Recursos/img/Monitor 1 PNG.png" alt="" class="offer-img">
            </div>
            <div class="col-2">
                <p class="top">Disponible exclusivamente en CompuSmart</p>
                <h1 class="textoOfe">Alienware 34 Curvo QD-OLED Gaming Monitor</h1>
                <p class="small">El primer monitor de juegos QD-OLED de Alienware. Con NVIDIA® G-SYNC® Ultimate,
                    relación de contraste infinita y VESA Display HDR True Back 400 para colores increíblemente
                    vivos y efectos visuales que cobran vida.</p>
                <button class="btn"><span>Comprar ahora!</span> &#8594;</button>
            </div>
        </div>
    </div>
</div>


<!---------  Marcas  -------->

<div class="brands">
    <div class="small-container">
        <div class="row">
            <div class="col-5">
                <img src="Recursos/logo/Alienware logo PNG.png" alt="Logo Alienware">
            </div>
            <div class="col-5">
                <img src="Recursos/logo/DELL logo PNG.png" alt="Logo DELL">
            </div>
            <div class="col-5">
                <img src="Recursos/logo/Corsair logo PNG.png" alt="Logo Corsair">
            </div>
            <div class="col-5">
                <img src="Recursos/logo/intel logo PNG.png" alt="Logo Intel">
            </div>
            <div class="col-5">
                <img src="Recursos/logo/ROG logo PNG.png" alt="Logo ROG">
            </div>

        </div>
    </div>
</div>

<!---------  Footer  -------->

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
                <p>Estamos ubicados de la Entrada del Barrio Chino, Avenida Segunda, 50 m al Norte, Comercial Nueva
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
        </p>
    </div>
    </div>
</footer>

</body>

</html>