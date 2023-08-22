<?php include '../include/header.php'; ?>

<?php

/// requires
require_once '../../funciones/recogeRequest.php';
require_once '../../DAL/contacto.php';
/**
 * Verificamos si hay datos enviados por post
 * si hay agregamos un nuevo producto
 */

if (recogeGet("leido")) {
  marcarLeidoCliente(recogeGet("leido"));
}

if (recogeGet("noleido")) {
  marcarNoLeidoCliente(recogeGet("noleido"));
}

$clientes = obtenerClientes();

?>
<?php if ($clientes) : ?>
  <!-- Contenedor de elementos -->
  <section class="contenedor-productos">
    <div class="div-h1-sin-background">
      <h1 id="texto_Conct">Catalogo de Contactos </h1>
    </div>
    <div class="contenedor">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Fecha</th>
            <th scope="col">Nombre</th>
            <th scope="col">E-Mail</th>
            <th scope="col">Telefono</th>
            <th scope="col">Direccion</th>
            <th scope="col">Mensaje</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = $clientes->fetch_assoc()) : ?>
            <tr>
              <th scope="row"><?php echo $row["id"]; ?></th>
              <td><?php echo $row["fecha"]; ?></td>
              <td><?php echo $row["nombre"]; ?></td>
              <td><?php echo $row["email"]; ?></td>
              <td><?php echo $row["telefono"]; ?></td>
              <td><?php echo $row["direccion"]; ?></td>
              <td><?php echo $row["mensaje"]; ?></td>
              <?php if ($row["leido"]  == 0) : ?>
                <td><a href="<?php echo './contactos.php?leido=' . $row["id"] ?>" class="boton-item">Marcar Leido</a></td>
              <?php else : ?>
                <td><a href="<?php echo './contactos.php?noleido=' . $row["id"] ?>" class="boton-item">Marcar No Leido</a></td>
              <?php endif ?>
            </tr>
          <?php endwhile ?>
        </tbody>

      </table>
    </div>
  </section>
<?php else : ?>
  <a> No hay productos aun, ingresa algunßos </a>
<?php endif  ?>

<?php include '../include/footer.php'; ?>