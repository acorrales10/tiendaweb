<?php


require_once 'conexion.php';

function agregarCliente($nombre, $cedula, $email, $telefono, $direccion, $mensaje)
{
    $retorno = false;
    try {
        $conexion = Conecta();

        //formato de datos UTF-8
        if (mysqli_set_charset($conexion, "utf8")) {
            $stmt = $conexion->prepare("insert into clientes(nombre, cedula, email, telefono, direccion, mensaje) values (?, ?, ?,?,?,?)");
            $stmt->bind_param("ssssss", $inombre, $icedula, $iemail, $itelefono, $idireccion, $imensaje);

            //set parametros y ejecutar
            $inombre = $nombre;
            $icedula = $cedula;
            $iemail = $email;
            $itelefono = $telefono;
            $idireccion = $direccion;
            $imensaje = $mensaje;

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

function marcarLeidoCliente($id)
{
    $retorno = false;
    try {
        $conexion = Conecta();
        $stmt = $conexion->prepare("UPDATE `clientes` SET `leido` = 1  WHERE `clientes`.`id` = ?");
        $stmt->bind_param("i",  $iid);

            //set parametros y ejecutar
            $iid = $id;
            if ($stmt->execute()) {
                $retorno = true;
            }
    } catch (\Throwable $th) {
        echo $th;
        //bitacoras
    } finally {
        Desconecta($conexion);
    }
    return $retorno;
}

function marcarNoLeidoCliente($id)
{
    $retorno = false;
    try {
        $conexion = Conecta();
        $stmt = $conexion->prepare("UPDATE `clientes` SET `leido` = 0  WHERE `clientes`.`id` = ?");
        $stmt->bind_param("i",  $iid);

            //set parametros y ejecutar
            $iid = $id;
            if ($stmt->execute()) {
                $retorno = true;
            }
    } catch (\Throwable $th) {
        echo $th;
        //bitacoras
    } finally {
        Desconecta($conexion);
    }
    return $retorno;
}


function obtenerClientes()
{
    $retorno = null;
    try {
        $conexion = Conecta();
        $sql = "SELECT * FROM clientes";
        $resultado = $conexion->query($sql);
        if ($resultado->num_rows > 0) {
            $retorno = $resultado;
        }
    } catch (\Throwable $th) {
        echo $th;
        //bitacoras
    } finally {
        Desconecta($conexion);
    }
    return $retorno;
}
