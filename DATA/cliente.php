<?php

require_once 'conexion.php';

function IngresaCliente($pNombre,$pIdentificacion,$pEmial,$pDireccion,$pMensaje)
{
    $retorno = false;
    try {
        $conexion = Conecta();

        //formato de datos UTF-8
        if (mysqli_set_charset($conexion, "utf8")) {
            $stmt = $conexion->prepare("insert into registro(nombre, identificacion, email, direccion, mensaje) values (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $iNombre, $iIdentificacion, $iEmail, $iDireccion,$iMensaje);

            //set parametros y ejecutar
            $iNombre = $pNombre;
            $iIdentificacion = $pIdentificacion;
            $iEmail = $pEmial;
            $iDireccion = $pDireccion;
            $iMensaje = $pMensaje;

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