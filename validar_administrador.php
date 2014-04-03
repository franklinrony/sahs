<?php
 //este archivo comprueba si el usuario ha iniciado sesión
 //cuando trabajamos con sesiones siempre se inicia la sesión actual...
 session_start();
 
 //si la sesión NO esta activa O el tipo de usuario ES diferente de 1
 //si cualquiera de las dos condiciones es cierta que me mande a la página de error...
if (!$_SESSION["activo"] or $_SESSION["tipo_usuario"] != 1 ){
	
	header("Location:error.php");
	}
	else{
		
		//si el usuario cumple las condiciones que muestre el botón de cerrar sesión...
		echo "Bienvenido: "."<font color='#FF0000'>" . $_SESSION['nombre_usuario']."</font>";
		echo "<form action='salir.php'><input type='submit' value='Cerrar sesión de usuario'></form>";
		}
		
		?>