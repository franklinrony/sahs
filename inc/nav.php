<?php
if(!defined('_SAHS_')){
	die('Hacking Attemp');	
}
else{
	echo '<div class="navbar  navbar-static-top ">
		<div class="navbar-inner">';
	if (isset($_SESSION["activo"])){
		//si existe una sesión activa mostramos el botón de cerrar sesión
        echo '<li class="brand">Bienvenido: '.  $_SESSION['nombre_usuario'].'</li> ';
	}
	else{
		echo'
			<a class="brand" href="#">SAHS-UPES</a>';
	}
	echo'
			<ul class="nav">
			<li class="divider-vertical"></li>
			<li class="active"><a href="index.php">Inicio</a></li>
			<li class="divider-vertical"></li>
			<li><a href="proyectos.php">Proyectos</a></li>
			<li class="divider-vertical"></li>
			<li><a href="registrar_empresa.php">Registrar Empresa</a></li>
			<li class="divider-vertical"></li>
			<li><a href="login.php">Ingresar</a></li>
			<li class="divider-vertical"></li>
			<li><a href="inc/salir.php">Salir</a></li>
			<li class="divider-vertical"></li>
			<li><a href="admin.php">Panel Admin</a></li>
			<li class="divider-vertical"></li>
			</ul>
		</div>
	</div>';
}
?>