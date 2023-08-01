<?php

function Conecta()
{
    $server = "localhost";
    $user = "root";
    $password = "";
    $dataBase = "DB-compusmart";


    // 1. Establecer la conexión con el motor de base de datos
    $conexion = mysqli_connect($server, $user, $password, $dataBase);

    if(!$conexion){
        echo "Ocurrió un error al establecer la conexión: " . mysqli_connect_error();
    }

    return $conexion;
}

function Desconecta($conexion)
{
    // 4. cerrar la conexión
    mysqli_close($conexion);
}