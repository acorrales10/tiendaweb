<?php

session_start();
$usuario = $_SESSION['username'];

if(!isset($usuario)){
    location("location: login.php)");

}else{


echo "<h1>BIENVENIDO $usuario </h1>";

echo "<a href='DATA/salir.php'>SALIR</a>";

}
?>