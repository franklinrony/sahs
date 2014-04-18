<?php
include_once 'settings.php';

//este archivo hace el análisis del login dirigiendo el flujo hacia donde corresponda, según la cuenta...


//...

if ($_POST["usuario"] =="otto" && $_POST["password"] =="upes123"){
	
	//iniciamos la sesión
	session_start();
	$_SESSION["activo"] = true;
	$_SESSION["tipo_usuario"] = 2;
	$_SESSION["nombre_usuario"] ="otto";
	header("Location:"."http://".$_SERVER['HTTP_HOST'].$base."/index.php");

	exit;
	
	}
	if ($_POST["usuario"] =="Raquel" && $_POST["password"] =="itca123"){
	
	//iniciamos la sesión
	session_start();
	$_SESSION["activo"] = true;
	$_SESSION["tipo_usuario"] = 1;
	$_SESSION["nombre_usuario"] ="Raquel";
	header("Location:"."http://".$_SERVER['HTTP_HOST'].$base."/index.php");

	exit;
	}

	
		//si no corresponde a ninguna cuenta, muestro el mensaje de error...
		header("Location:"."http://".$_SERVER['HTTP_HOST'].$base."/login.php?error=si");
		
		
		

?>
