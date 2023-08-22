<?php include_once './include/header_login.php' ?>
</div>

    <div class = "wrapper">
        <form method="post" action="./php/send.php" autocomplete="off" >
            <h1>Registrate</h1>
            <div class ="input-box">
                <input type="text" name="name" class="input-login" placeholder="Nombre" required>
            </div>

            <div class ="input-box">
                <input type="text" name="apellido1" class="input-login" placeholder="Primer Apellido" required>
            </div>

            <div class ="input-box">
                <input type="text" name="apellido2" class="input-login" placeholder="Segundo Apellido" required>
            </div>

            <div class ="input-box">
                <input type="email" name="email" class="input-login" placeholder="Email" required>
            </div>


            <div class ="input-box">
                <input type="tel" name="phone" class="input-login" placeholder="Telefono" required>
            </div>

            <div class ="input-box">
                <input type="text" name="address" class="input-login" placeholder="Dirección" required>
            </div>

            <div class ="input-box">
                <input type="password" name="password" class="input-login" placeholder="Contraseña" required>
            </div>

            <input name="send" type="submit" class="btn" value="Enviar">

            <div class="register-link">
                <p>Regresar a <a href="Login.php">Inicio de Sesión </a></p>

            </div>

        </form>

    </div>
    <?php

    include("send.php")

    ?>

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
            </p>
        </div>
        </div>
    </footer>

</body>

</html>