<?php
include("../DAL/factura.php");



if (isset($_GET['idFactura'])) {

    
        $idFactura = trim($_GET['idFactura']);
        $idProducto = trim($_GET['idProducto']);
        $cantidad = trim($_GET['cantidad']);
        $precio = trim($_GET['precio']);
        $total = trim($_GET['total']);
        $lineas = trim($_GET['lineas']);
        $resultado = agregarLinea($idProducto, $idFactura,  $cantidad, $precio, $total, $lineas);

        if ($resultado) {
?>
            <h3 class="success">Has sido registrado exitosamente</h3>
            <?php
            header("Location: ../productos.php");
            ?>
        <?php
        } else {
        ?>
            <h3 class="error">Ocurrio un error</h3>
    <?php
        }
} else { ?> <h3 class="error">Llena todos los campos</h3> <?php

                                                    }
                                                        ?>