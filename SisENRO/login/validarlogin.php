<?php
session_start();

$usuario=$_POST['usuario'];
$password=$_POST['password'];

include("conexion.php");

$validar= $conexion->query("SELECT * FROM login WHERE usuario= '$usuario' AND password='$password'");
	if($resultado= mysqli_fetch_array($validar)){
		$_SESSION['usuario']= $usuario;//comparar si esta logiado
		//header("Location:  sesion.php");  //redirecionar si el dato es valido 
		echo "sesion exitosa";
	}else{
		header("Location:  index.php"); // si los datos noson correctos redirecionar a la pagina principal 
		echo "sesion no iniciada";
	}
?>


