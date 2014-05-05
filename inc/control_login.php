<?php
//este archivo consulta a la base de datos, si el usuario está registrado...

//incluimos las bibliotecas correspondientes...
//gestiona la base de datos...
include_once 'settings.php';
include_once'../gestionarconexion/motor.php';
include_once'../clases/Usuario.php';
$usuario = new Usuario();
$usuario->usuario = $_POST["usuario"];
$usuario->password = $_POST["password"];

//ejecutamos el método para buscar al usuario...
if($usuario->consultarExistenciaUsuario()){
	
	?>
    	<!--Mostramos un mensaje al usuario...-->
        <html>
        <head>
		<script language="Javascript" type="text/javascript">
		alert("Ha iniciado sesión correctamente..")
        </script>
        </head>
        <body>
        </body>
        </html>
		
	<?php	
	//redirigimos el flujo a la página de inicio...
		header("Location:"."http://".$_SERVER['HTTP_HOST'].$base."/index.php");
		
}

else
{
	//caso contrario regresamos a la página de login, y le mandamos la variable error con valor 'si'
	header("Location:"."http://".$_SERVER['HTTP_HOST'].$base."/login.php?error=si");
	}

		

?>
