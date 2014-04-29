<?php
include_once 'settings.php';

 //este archivo comprueba si el usuario ha iniciado sesión
 //cuando trabajamos con sesiones siempre se inicia la sesión actual...
 session_start();
 
if (!$_SESSION["activo"]){
	
	header("Location:"."http://".$_SERVER['HTTP_HOST'].$base."/error.php");
	}
		
?>