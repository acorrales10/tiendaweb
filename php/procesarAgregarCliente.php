<?php
include("../DAL/contacto.php");



if (isset($_POST['send'])) {

    if (
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['identificacion']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['telefono']) >= 1 &&
        strlen($_POST['direccion']) >= 1 &&
        strlen($_POST['mensaje']) >= 1

    ) {
        $name = trim($_POST['nombre']);
        $cedula = trim($_POST['identificacion']);
        $email = trim($_POST['email']);
        $telefono = trim($_POST['telefono']);
        $direccion = trim($_POST['direccion']);
        $mensaje = trim($_POST['mensaje']);
        $resultado = agregarCliente($name, $cedula, $email, $telefono, $direccion, $mensaje);

        if ($resultado) {
?>
            <h3 class="success">Has sido enviado exitosamente</h3>
            <?php
            header("Location: ../index.php");
            ?>
        <?php
        } else {
        ?>
            <h3 class="error">Ocurrio un error</h3>
    <?php
        }
    }
} else { ?> <h3 class="error">Llena todos los campos</h3> <?php

                                                    }
                                                        ?>