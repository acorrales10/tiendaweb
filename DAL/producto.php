<?php


require_once 'conexion.php';

function agregarProducto($marca, $descripcion, $imagen, $precio, $destacado)
{
    $retorno = false;
    try {
        $conexion = Conecta();

        //formato de datos UTF-8
        if (mysqli_set_charset($conexion, "utf8")) {
            $stmt = $conexion->prepare("insert into productos(marca, descripcion, imagen, precio, destacado) values (?, ?, ?,?,?)");
            $stmt->bind_param("sssdi", $imarca, $idescripcion, $iimagen, $iprecio, $idestacado);

            //set parametros y ejecutar
            $imarca = $marca;
            $idescripcion = $descripcion;
            $iimagen = $imagen;
            $iprecio = $precio;
            $idestacado = $destacado;

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


function editarProducto($id, $marca, $descripcion, $imagen, $precio, $destacado)
{
    $retorno = false;
    try {
        $conexion = Conecta();
        $stmt = $conexion->prepare("UPDATE `productos` SET `marca` = ?, `descripcion` = ?, `imagen` = ?, `precio` =  ? , `destacado` =  ? WHERE `productos`.`id` = ?");
        $stmt->bind_param("sssdii", $imarca, $idescripcion, $iimagen, $iprecio,$idestacado ,$iid);

            //set parametros y ejecutar
            $imarca = $marca;
            $idescripcion = $descripcion;
            $iimagen = $imagen;
            $iprecio = $precio;
            $idestacado = $destacado;
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

function eliminarProducto($id)
{
    $retorno = false;
    try {
        $conexion = Conecta();
        $stmt = $conexion->prepare("DELETE FROM `productos`  WHERE `productos`.`id` = ?");
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

function obtenerProductos()
{
    $retorno = null;
    try {
        $conexion = Conecta();
        $sql = "SELECT * FROM productos";
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

function obtenerProductosDestacados()
{
    $retorno = null;
    try {
        $conexion = Conecta();
        $sql = "SELECT * FROM productos WHERE destacado = 1 ORDER BY fecha DESC limit 4;";
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


function obtenerProductosRecientes()
{
    $retorno = null;
    try {
        $conexion = Conecta();
        $sql = "SELECT * FROM productos ORDER BY fecha DESC limit 4;";
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

function obtenerProducto($id)
{
    $retorno = null;
    try {
        $conexion = Conecta();
        $stmt = "SELECT * FROM productos WHERE id = $id";
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
