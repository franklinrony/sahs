<?php
//este archivo hace el análisis del login dirigiendo el flujo hacia donde corresponda, según la cuenta...


//...

if ($_POST["usuario"] =="otto" && $_POST["password"] =="upes123"){
	
	//iniciamos la sesión
	session_start();
	$_SESSION["activo"] = true;
	$_SESSION["tipo_usuario"] = 2;
	$_SESSION["nombre_usuario"] ="otto";
	header("Location:index.php");
	exit;
	
	}
	if ($_POST["usuario"] =="Raquel" && $_POST["password"] =="itca123"){
	
	//iniciamos la sesión
	session_start();
	$_SESSION["activo"] = true;
	$_SESSION["tipo_usuario"] = 1;
	$_SESSION["nombre_usuario"] ="Raquel";
	header("Location:index.php");
	exit;
	}

	
		//si no corresponde a ninguna cuenta, muestro el mensaje de error...
		header("Location:login.php?error=si");
		
		
		

?>
