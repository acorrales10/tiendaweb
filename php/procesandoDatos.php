<?php
include '../include/header.php'; ?>

<div>
<h3>Datos a enviar</h3>

<p>Nombre: <?= $_POST['nombre'] ?> </p>
<p>identificacion: <?= $_POST['identificacion'] ?> </p>
<p>Email: <?= $_POST['email'] ?> </p>
<p>Direccion: <?= $_POST['direccion'] ?> </p>
<p>mensaje: <?= $_POST['mensaje'] ?> </p>
</div>
<?php

    function IngresaDatosArchivo($nombre, $identificacion, $email, $direccion, $mensaje)
                {
                    try {
                        $archivo = fopen('datos.txt', 'w');
            
                        $datos = "$nombre,$identificacion,$email,$direccion,$mensaje\n";
                        fwrite($archivo,$datos);
                    } catch (\Throwable $th) {
                        echo "<h4>Ocurrió un error inesperado, contacte a servicio al cliente</h4>"; 
                        // Almacenar a una bitacora (archivo, base datos, o endpoint) $th;
                        //inicializar variables
                    } finally{
                        fclose($archivo);
                    }
                }

function AgregarDatosArchivo($nombre, $identificacion, $email, $direccion, $mensaje)
                {
                    try {
                        //$archivo = fopen('C:\filesApp\datosAgregados.txt', 'a');
                        $archivo = fopen('datosAgregados.txt', 'a');

                        $datos = "$nombre,$identificacion,$email,$direccion,$mensaje\n";
                        fwrite($archivo,$datos);
                    } catch (\Throwable $th) {
                        echo "<h4>Ocurrió un error inesperado, contacte a servicio al cliente: $th</h4>"; 
                        // Almacenar a una bitacora (archivo, base datos, o endpoint) $th;
                        //inicializar variables
                    } finally{
                        fclose($archivo);
                    }
                }

                function LeerArchivo($nombreArchivo)
                {
                    try {
                        $archivo = fopen($nombreArchivo, 'r');
                        echo "<ul>"; 
                        while (($linea = fgets($archivo)) != null) {
                            $arregloValores = explode(',', $linea);
                            echo "<ul>";
                            foreach ($arregloValores as $value) {
                                echo "<li>$value</li>";
                            }
                            echo "</ul>";
                            echo "<li>$linea</li>";
                        }
                        echo "</ul>";
                    } catch (\Throwable $th) {
                        echo "<h4>Ocurrió un error inesperado, contacte a servicio al cliente: $th</h4>"; 
                        // Almacenar a una bitacora (archivo, base datos, o endpoint) $th;
                        //inicializar variables
                    } finally{
                        fclose($archivo);
                    }
                }

                // try {
                //     IngresaDatosArchivo($_POST['nombre'], $_POST['identificacion'], $_POST['email'], $_POST['direccion'], $_POST['mensaje']);
                //     AgregarDatosArchivo($_POST['nombre'], $_POST['identificacion'], $_POST['email'], $_POST['direccion'], $_POST['mensaje']);
                //     LeerArchivo('datosAgregados.txt');
                // } catch (\Throwable $th) {
                //     //echo $th;
                //     echo "<h4>Ocurrió un error inesperado, contacte a XXX</h4>"; 
                //     // Almacenar a una bitacora (archivo, base datos, o endpoint) $th;
                //     //inicializar variables
                // }
            ?>


<?php include '../include/footer.php'; ?>