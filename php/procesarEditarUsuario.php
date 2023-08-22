<?php
include("../DAL/usuario.php");



if (isset($_POST['send'])) {

    if (
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['apellido1']) >= 1 &&
        strlen($_POST['apellido2']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['address']) >= 1 &&
        $_POST['id'] >= 1

    ) {
        $name = trim($_POST['name']);
        $apellido1 = trim($_POST['apellido1']);
        $apellido2 = trim($_POST['apellido2']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);
        $address = trim($_POST['address']);
        $id = $_POST['id'];
        $resultado = editarUsuario($name, $apellido1, $apellido2, $email, $phone, $address, $id);

        if ($resultado) {
?>
            <h3 class="success">Has sido registrado exitosamente</h3>
            <?php
            session_start();
            $_SESSION["nombre"] = $name;
            $_SESSION["apellido1"] = $apellido1;
            $_SESSION["apellido2"] = $apellido2;
            $_SESSION["email"] = $email;
            $_SESSION["direccion"] = $address;
            $_SESSION["telefono"] = $phone;

            header("Location: ../cuenta.php");
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