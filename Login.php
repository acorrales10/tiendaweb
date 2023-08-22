<?php include_once './include/header_login.php' ?>
</div>
    <div class = "wrapper">
        <form method="post">
            <h1>Iniciar Sesion</h1>
            <?php
            include "./DAL/conexion.php";
            include "./controlador/controller_login.php";
            ?>
            <div class ="input-box">
                <input type="email" name="email" class="input-login" placeholder="Email">
                <i class='bx bxs-user'></i>
            </div>

            <div class ="input-box">
                <input type="password" name="password" class="input-login" placeholder="Contraseña">
                <i class='bx bxs-lock'></i>
            </div>

            <div class="remember-forgot">
                <label class="label-login"><input type="checkbox" class="input-login">Recuerdame</label>
                <a href="#">Olvidaste tu Contraseña</a>
            </div>

            <input name="login" type="submit" class="btn" value="Inciar Sesión">

            <div class="register-link">
                <p>No tienes un cuenta aun? <a href="register.php">Registrate</a></p>

            </div>

        </form>

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
            </p>
        </div>
        </div>
    </footer>

</body>

</html>