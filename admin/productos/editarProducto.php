<?php include '../include/header.php'; ?>

<?php

/// requires
require_once '../../funciones/recogeRequest.php';
require_once '../../DAL/producto.php';
/**
 * Verificamos si hay datos enviados por post
 * si hay agregamos un nuevo producto
 */

if (recogeGet("eliminar")) {
    eliminarProducto(recogeGet("eliminar"));
}

$productId  = "";
if (!empty($_GET)) {
    $productId = recogeGet("id");
    $producto = obtenerProducto($productId);
    print_r($producto->marca);
}

$productos = obtenerProductos();
if (!empty($_POST)) {

    $marca = recogePost("marca");
    $descripcion = recogePost("descripcion");
    $imagen = recogePost("imagen");
    $precio = recogePost("precio");

    $marcaOk = false;
    $descripcionOk = false;
    $imagenOk = false;
    $precioOk = false;

    $errores = [];

    //investigar expresiones regulares en php y completar las siguientes validaciones

    if ($marca === "") {
        $errores[] = "No se digito la marca de la persona";
    } else {
        $marcaOk = true;
    }

    if ($descripcion === "") {
        $errores[] = "No se digito el correo de la persona";
    } else {
        $descripcionOk = true;
    }

    if ($imagen === "") {
        $errores[] = "No se digito el teléfono de la persona";
    } else {
        $imagenOk = true;
    }

    if ($precio === "") {
        $errores[] = "No se digito el teléfono de la persona";
    } else {
        $precioOk = true;
    }

    if ($marcaOk && $descripcionOk && $imagenOk && $precioOk) {
        //ingresar datos de un producto
        if (editarProducto($productId, $marca, $descripcion, $imagen, $precio)) {
            header("Location: ./productos.php");
        }
    }
}

?>

<div class="div-h1">
    <h1 id="texto_Conct">Editar Producto <?php echo $productId ?> </h1>
</div>
<div id="Main-Contact">
    <fieldset>
        <form class="contact_form" action="./editarProducto.php" method="POST" id="contact_form" runat="server">

            <input type="hidden" id="id" name="id" value="<?php echo $productId ?>">
            <div id="contenedor">
                <label class="label" for="txtMarca">Marca</label>
                <input type="text" name="marca" id="txtMarca" class="Input" placeholder="&nbsp;" required value="<?php echo $producto->marca; ?>" />
            </div>

            <div id="contenedor">
                <label class="label" for="txtDescripcion">Descripción</label>
                <textarea type="text" name="descripcion" id="txtDescripcion" class="Input" placeholder="&nbsp;" required rows="4" cols="50"><?php echo $producto->descripcion; ?></textarea>
            </div>

            <div id="contenedor">
                <label class="label" for="txtImagen">URL de la imagen</label>
                <input type="text" name="imagen" id="txtImagen" class="Input" placeholder="&nbsp;" required value="<?php echo $producto->imagen; ?>" />
            </div>

            <div id="contenedor">
                <label class="label" for="txtPrecio">Precio</label>
                <input type="number" name="precio" id="txtDireccion" class="Input" placeholder="&nbsp;" value="<?php echo $producto->precio ?>" />
            </div>

            <div>
                <button class="boton" type="submit" id="btnRegistrarse">Actualizar Producto</button>
            </div>
        </form>
    </fieldset>
</div>
<?php if ($productos) : ?>

    <div class="div-h1">
        <h1 id="texto_Conct">Catalogo de Productos </h1>
    </div>
    <section class="contenedor">
        <!-- Contenedor de elementos -->
        <div class="contenedor-items">
            <?php while ($row = $productos->fetch_assoc()) : ?>
                <div class="item">
                    <span class="titulo-item"><?php echo $row["marca"] . " - " . $row["descripcion"]; ?></span>
                    <img src="<?php echo $row["imagen"]; ?>" alt="" class="img-item">
                    <span class="precio-item">₡ <?php echo  number_format($row["precio"], 2, ',', '.'); ?></span>
                    <a href="<?php echo './productos.php?id=' . $row["id"] ?>" class="boton-item">Editar Producto</a>
                    <a href="<?php echo './productos.php?eliminar=' . $row["id"] ?>" class="boton-item">Eliminar Producto</a>
                </div>
        </div>
    <?php endwhile ?>
    </div>
    </section>
<?php else : ?>
    <a> No hay productos aun, ingresa algunos </a>
<?php endif  ?>

<?php include '../include/footer.php'; ?>