<?php include_once './include/header.php'?>
    <div class="div-h1">
        <h1 id="texto_Conct">Estamos a solo un clic de distancia! <br>Contáctanos y estaremos encantados de ayudarte.</h1>
    </div>
    <div id="Main-Contact">
        <fieldset>
            <form class="contact_form" action="./php/procesandoDatos.php" method="POST" id="contact_form" runat="server">

                <div id="contenedor">
                    <label class="label" for="txtNombre">Nombre</label>
                    <input type="text"  name="nombre" id="txtNombre" class="Input" placeholder="&nbsp;" required />
                </div>

                <div id="contenedor">
                    <label class="label" for="txtId">Identificación</label>
                    <input type="text" name="identificacion" id="txtId" class="Input" placeholder="&nbsp;" required />
                </div>

                <div id="contenedor">
                    <label class="label" for="txtEmail">Email</label>
                    <input type="email" name="email" id="txtEmail" class="Input" placeholder="&nbsp;" required />
                </div>

                <div id="contenedor">
                    <label class="label" for="txtDireccion">Dirección</label>
                    <input type="text" name="direccion" id="txtDireccion" class="Input" placeholder="&nbsp;" />
                </div>

                <div id="contenedor">
                    <label class="label" for="txtMsj">Mensaje</label>
                    <textarea type="text" name="mensaje" id="txtMsj" class="Input" placeholder="&nbsp;" required ></textarea>
                </div>

                <div>
                    <button class="boton" type="submit" id="btnRegistrarse">Enviar</button>
                </div>

                <div>
                    <button class="boton" type="reset" id="btnLimpiar">Limpiar</button>
                </div>

            </form>
        </fieldset>
    </div>
</body>


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
    </div>
    </div>
</footer>


<script src="Js/Script.js" type="text/javascript"></script>

</html>