<?php

session_start();

$usuario = $POST['usuario'];
$clave = $POST['clave'];

$q = "SELECT COUNT(*)  as Contar from usuarios where usuario = '$usuario ' and clave = '$password ' ";
$consulta = mysqli_query($conexion,$q);
$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
    $_SESSION['username'] = $usuario;
    header("location: ../paginaprincipal.php");

}else{

    echo "DATOS INCORERECTOS";

}

?>