<?php
function conectar(){

    $host="localhost";
    $user="root";
    $password=" ";
    $bd="Login";
    
 $con = mysql_connect($host, $user, $password);
 
if (!$con) {
	echo("Conectado");
}else{
    echo("No Conectado").mysql_error
}

mysql_select_db($bd, $con);
return $con;

}

?>