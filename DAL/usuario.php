<?php


require_once 'conexion.php';

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


function editarUsuario($name, $apellido1, $apellido2, $email, $phone, $address, $id)
{
    $retorno = false;
    try {
        $conexion = Conecta();
        $stmt = $conexion->prepare("UPDATE usuarios SET `nombre` = ?, `apellido1` = ?, `apellido2` = ?, `email` =  ? , `telefono` =  ?, `direccion` =  ? WHERE `usuarios`.`id` = ?");
        $stmt->bind_param("ssssssd", $iname, $iapellido1, $iapellido2, $iemail,$iphone, $iaddress ,$iid);

            //set parametros y ejecutar
            $iname = $name;
            $iapellido1 = $apellido1;
            $iapellido2 = $apellido2;
            $iemail = $email;
            $iphone = $phone;
            $iaddress = $address;
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


function obtenerUsuarios()
{
    $retorno = null;
    try {
        $conexion = Conecta();
        $sql = "SELECT * FROM usuarios";
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


function obtenerUsuario($id)
{
    $retorno = null;
    try {
        $conexion = Conecta();
        $stmt = "SELECT * FROM usuarios WHERE id = $id";
        $resultado = $conexion->query($stmt);
        if($resultado->num_rows > 0){
            return $resultado->fetch_object();
        }
        
    } catch (\Throwable $th) {
        echo $th;
        //bitacoras
    } finally {
        Desconecta($conexion);
    }
    return $retorno;
}


