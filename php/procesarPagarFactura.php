<?php
include("../DAL/factura.php");



if (isset($_GET['idFactura'])) {
        $idFactura = trim($_GET['idFactura']);
        $total = trim($_GET['total']);
        $resultado = finalizarFactura($idFactura, $total);

        if ($resultado) {
?>
            <h3 class="success">Has sido registrado exitosamente</h3>
            <?php
            header("Location: ../index.php");
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