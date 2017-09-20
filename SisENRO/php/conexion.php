<?php

function conectar(){
$ruta  ="localhost";
$login ="root";
$pass="";
$db    ="BDenro";
$conexion= mysqli_connect($ruta, $login,$pass,$db)
           or die(mysqli_error());

return $conexion; 
}

?>