<?php
include("../DAL/factura.php");



if (isset($_GET['idFactura'])) {

    
        $idFactura = trim($_GET['idFactura']);
        $linea = trim($_GET['linea']);
        $lineas = trim($_GET['lineas']);
        $resultado = quitarLinea($linea, $idFactura,  $lineas);

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