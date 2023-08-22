<?php
include("../DAL/conexion.php");


function insertarUsuario($name, $apellido1, $apellido2, $email, $phone, $address, $password)
{
    $retorno = false;
    try {
        $conexion = Conecta();

        //formato de datos UTF-8
        if (mysqli_set_charset($conexion, "utf8")) {
            $stmt = $conexion->prepare("insert into usuarios (nombre, apellido1, apellido2, email, telefono, direccion, password, permissions, roles, active) values (?,?,?,?,?,?,?,'USER','USER',1)");
            $stmt->bind_param("sssssss", $iname, $iapellido1, $iapellido2, $iemail, $iphone, $iaddress, $ipassword);

            //set parametros y ejecutar
            $iname = $name;
            $iapellido1 = $apellido1;
            $iapellido2 = $apellido2;
            $iemail = $email;
            $iphone = $phone;
            $iaddress = $address;
            $ipassword = $password;

            if ($stmt->execute()) {
                $retorno = true;
            }
        }
    } catch (\Throwable $th) {
        echo $th;
        //bitacoras
    } finally {
        Desconecta($conexion);
    }

    return $retorno;
}
if (isset($_POST['send'])) {

    if (
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['apellido1']) >= 1 &&
        strlen($_POST['apellido2']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['address']) >= 1 &&
        strlen($_POST['password']) >= 1

    ) {
        $name = trim($_POST['name']);
        $apellido1 = trim($_POST['apellido1']);
        $apellido2 = trim($_POST['apellido2']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);
        $address = trim($_POST['address']);
        $password = trim($_POST['password']);
        $resultado = insertarUsuario($name, $apellido1, $apellido2, $email, $phone, $address, $password);

        if ($resultado) {
?>
            <h3 class="success">Has sido registrado exitosamente</h3>
            <?php
            header("Location: ../login.html");
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