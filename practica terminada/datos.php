<?php
session_start();
if(isset($_SESSION['usuario'])){
	header('location: datos.php');
}

if( ($_POST['codigo'] == 100 && $_POST['contrase�a'] == "udg") ||
	($_POST['codigo'] == 110 AND $_POST['contrase�a'] == "tonala") ||
	($_POST['codigo'] == 1 AND $_POST['contrase�a'] == "root")){
	$_SESSION['usuario']=$_POST['codigo'];
	header('location: redireccionar.php');

}else{
	
	header('location: ingresar.php');
}


?>
