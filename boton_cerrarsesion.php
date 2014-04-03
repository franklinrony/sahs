<?php
//iniciamos la sesión...
session_start();
//comprobamos si hay una sesión activa...

if (isset($_SESSION["activo"])){
	//si existe una sesión activa mostramos el botón de cerrar sesión
		
		echo "Bienvenido: "."<font color='#FF0000'>" . $_SESSION['nombre_usuario']."</font>";
		echo "<form action='salir.php'><input type='submit' value='Cerrar sesión de usuario'></form>";
	}
	//si no existe la sesión activa pues simplemente no mostramos nada...
	



?>