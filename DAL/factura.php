<?php

require_once 'conexion.php';

function obtenerOCrearBorrador($idUsuario){
    $retorno = obtenerBorrador($idUsuario);
    if($retorno == null){
        $retorno = crearBorrador($idUsuario);
    }
    return $retorno;
}

function obtenerBorrador($idUsuario){
    $retorno = null;
    try {
        $conexion = Conecta();
        $stmt = "SELECT * FROM factura WHERE usuario = $idUsuario AND  finalizada = 0;";
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

function crearBorrador($idUsuario){
    $retorno = null;
    try {
        $conexion = Conecta();

        //formato de datos UTF-8
        if (mysqli_set_charset($conexion, "utf8")) {
            $stmt = $conexion->prepare("insert into factura(usuario, lineas, total) values (?, 0,0)");
            $stmt->bind_param("d", $iidUsuario);
            //set parametros y ejecutar
            $iidUsuario = $idUsuario;
            if ($stmt->execute()) {
                $retorno = obtenerBorrador($idUsuario);
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

function actualizarFactura($id, $lineas)
{
    $retorno = false;
    try {
        $conexion = Conecta();
        $stmt = $conexion->prepare("UPDATE factura SET `lineas` = ?  WHERE `factura`.`id` = ?");
        $stmt->bind_param("ii", $ilineas,$iid);

            //set parametros y ejecutar
            $ilineas = $lineas;
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

function finalizarFactura($id, $total)
{
    $retorno = false;
    try {
        $conexion = Conecta();
        $stmt = $conexion->prepare("UPDATE factura SET `total` = ?, finalizada = 1 WHERE `factura`.`id` = ?");
        $stmt->bind_param("di", $itotal,$iid);

            //set parametros y ejecutar
            $itotal = $total;
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


function obtenerLineasXFactura($idFactura){
    $retorno = null;
    try {
        $conexion = Conecta();
        $stmt = "SELECT lf.id, lf.id_factura, lf.id_producto, lf.cantidad, lf.precio, lf.total, p.imagen, p.descripcion FROM lineas_factura as lf INNER JOIN productos as p on p.id = lf.id_producto  WHERE id_factura = $idFactura ";
        $resultado = $conexion->query($stmt);
        if($resultado->num_rows > 0){
            return $resultado;
        }
        
    } catch (\Throwable $th) {
        echo $th;
        //bitacoras
    } finally {
        Desconecta($conexion);
    }
    return $retorno;
}

function agregarLinea($idProducto, $idFactura, $cantidad, $precio, $total, $cantidadLineas){
    $retorno = null;
    try {
        $conexion = Conecta();

        //formato de datos UTF-8
        if (mysqli_set_charset($conexion, "utf8")) {
            $stmt = $conexion->prepare("insert into lineas_factura(id_factura, id_producto, cantidad, precio, total) values (?, ?,?,?,?)");
            $stmt->bind_param("iiidd", $iidFactura, $iidProducto, $icantidad, $iprecio, $itotal);
            //set parametros y ejecutar
            $iidProducto = $idProducto;
            $iidFactura = $idFactura;
            $icantidad = $cantidad;
            $iprecio = $precio;
            $itotal = $total;
            if ($stmt->execute()) {
                actualizarFactura($idFactura, $cantidadLineas + 1);
                $retorno = obtenerLineasXFactura($idFactura);

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

function quitarLinea($linea, $idFactura, $cantidadLineas){
    $retorno = null;
    try {
        $conexion = Conecta();
        $stmt = $conexion->prepare("DELETE FROM `lineas_factura`  WHERE id = ? ");
        $stmt->bind_param("i",  $ilinea);

            //set parametros y ejecutar
            $ilinea = $linea;
            if ($stmt->execute()) {
                actualizarFactura($idFactura, $cantidadLineas - 1);
                $retorno = obtenerLineasXFactura($idFactura);
            }
    }catch (\Throwable $th) {
        echo $th;
        //bitacoras
    } finally {
        Desconecta($conexion);
    }

    return $retorno;
}


function obtenerFacturasXUsuario($idUsuario)
{
    $retorno = null;
    try {
        $conexion = Conecta();
        $sql = "SELECT * FROM factura where usuario = $idUsuario AND finalizada = 1 ORDER BY fecha DESC;";
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