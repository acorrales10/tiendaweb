<?php
session_start();
if(!empty($_POST["login"])){
   
    if(!empty($_POST["email"]) and !empty($_POST["password"])){
        $user=$_POST["email"];
        $password=$_POST["password"];
        $conexion = Conecta();
        $sql=$conexion->query("SELECT * FROM usuarios WHERE email='$user' AND password='$password'");
        if($datos=$sql->fetch_object()){
            $_SESSION["id"]=$datos->id;
            $_SESSION["nombre"]=$datos->nombre;
            $_SESSION["apellido1"]=$datos->apellido1;
            $_SESSION["apellido2"]=$datos->apellido2;
            $_SESSION["rol"]=$datos->roles;
            $_SESSION["id"]=$datos->id;
            $_SESSION["email"]=$datos->email;
            $_SESSION["direccion"]=$datos->direccion;
            $_SESSION["telefono"]=$datos->telefono;

            Desconecta($conexion);
            header("location:index.php");
        }else{
            Desconecta($conexion);
            echo "<div class='alert alert-danger'>Acceso Denegado</div>";
        }
}else {
    echo "Los campos estan vacios";
}
}

?>