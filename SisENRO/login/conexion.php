<?php 

// se procede a validar la conexion
$conexion = new mysqli("localhost","root","","bdlogin");
    if($conexion){
        echo "conexion exitosa";
        
    }else{
    echo "conexion fallida";
        }

?>