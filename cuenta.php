<?php include_once './include/header.php' ?>
<div class="div-h1">
    <h1 id="texto_Conct">Información de la cuenta.</h1>
</div>
<?php 
if(!empty($_SESSION["id"])){
    $facturas = obtenerFacturasXUsuario($_SESSION["id"]);
}

?>
<div id="Main-Contact">
    <fieldset>
        <form class="contact_form" action="./php/procesarEditarUsuario.php" method="POST" id="contact_form" runat="server">
        <input type="hidden" id="id" name="id" value="<?php echo $_SESSION["id"] ?>">
            <div id="contenedor">
                <label class="label" for="txtNombre">Nombre</label>
                <input type="text" name="name" id="txtNombre" class="Input" required placeholder="&nbsp;" value="<?php echo $_SESSION["nombre"]?>" />
            </div>

            <div id="contenedor">
                <label class="label" for="txtApellido1">Apellido  1</label>
                <input type="text" name="apellido1" id="txtApellido1" class="Input" required placeholder="&nbsp;" value="<?php echo $_SESSION["apellido1"] ?>" />
            </div>

            <div id="contenedor">
                <label class="label" for="txtApellido2">Apellido 2</label>
                <input type="text" name="apellido2" id="txtApellido2" class="Input"  required placeholder="&nbsp;" value="<?php echo $_SESSION["apellido2"] ?>" />
            </div>

            <div id="contenedor">
                <label class="label" for="txtEmail">Email</label>
                <input type="email" name="email" id="txtEmail" class="Input" required placeholder="&nbsp;" value="<?php echo $_SESSION["email"] ?>" />
            </div>

            <div id="contenedor">
                <label class="label" for="txtTelefono">Telefono</label>
                <input type="text" name="phone" id="txtTelefono" class="Input"  required placeholder="&nbsp;" value="<?php echo $_SESSION["telefono"] ?>" />
            </div>

            <div id="contenedor">
                <label class="label" for="txtDir">Dirección</label>
                <textarea type="text" name="address" id="txtDir" class="Input"  required placeholder="&nbsp;"> <?php echo $_SESSION["direccion"] ?></textarea>
            </div>

            <div>
                    <input  name="send" class="btn" type="submit" id="btnRegistrarse" value="Actualizar Datos" />
                </div>


        </form>
    </fieldset>

    <section class="contenedor-productos">
    <div class="div-h1-sin-background">
      <h1 id="texto_Conct">Facturas canceladas </h1>
    </div>
    <div class="contenedor">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Fecha</th>
            <th scope="col">Lineas</th>
            <th scope="col">Total</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = $facturas->fetch_assoc()) : ?>
            <tr>
              <th scope="row"><?php echo $row["id"]; ?></th>
              <td><?php echo $row["fecha"]; ?></td>
              <td><?php echo $row["lineas"]; ?></td>
              <td><?php echo $row["total"]; ?></td>
            </tr>
          <?php endwhile ?>
        </tbody>

      </table>
    </div>
  </section>
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