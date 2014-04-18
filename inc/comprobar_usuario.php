<?php
include_once 'settings.php';

 //este archivo comprueba si el usuario ha iniciado sesión
 //cuando trabajamos con sesiones siempre se inicia la sesión actual...
 session_start();
 
if (!$_SESSION["activo"]){
	
	header("Location:"."http://".$_SERVER['HTTP_HOST'].$base."/error.php");
	}
	else{
		
		//si el usuario ya inicio sesión se muestra el botón de cierre de sesión...
		echo "Bienvenido: "."<font color='#FF0000'>" . $_SESSION['nombre_usuario']."</font>";
		echo "<form action='inc/salir.php'><input type='submit' value='Cerrar sesión de usuario'></form>";
		}
		
		?>