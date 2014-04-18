<?php include_once'inc/boton_cerrarsesion.php'; ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="description" content="Ingreso de usuarios al sistema">
	<meta name="keywords" content="login,upes,sahs,universidad politecnica">
    <title>Ingreso Usuario</title>
    <link rel="stylesheet" href="css/navbar.css" type="text/css"  media="all">
    <link rel="stylesheet" href="css/principal.css" type="text/css"  media="all">
	<link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.css">
</head>
<body>
    <div id="main">
        <div id="header">
            <?php  include 'inc/header.php';?>
        </div>
        <div id="navbar">
            <?php include 'inc/nav.php';?>
        </div>
        <!--formulario de login -->
        <div id="content">
		    <div class="login">
            
            
            
           <?php 
		   //le decimos a php que no me muestre las notificaciones, solamente los errores... 
		   error_reporting(E_ALL^E_NOTICE);
		   //validamos si el usuario introdujo correctamente los datos...
		   
		   	if ($_GET["error"] == "si"){
				echo "<span><font color='#FF0000'>¡Datos incorrectos, no esta autorizado para ingresar al sistema!				               	</font></span><br /><br />";
				}
			?>
            
            
            
            
      <h1>Ingresar al sistema</h1>
      <form method="post" action="inc/control_login.php">
        <p><input type="text" name="usuario" value="Usuario"></p>
        <p><input type="password" name="password" value="Password"></p>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Recordarme en este equipo
          </label>
        </p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
      </form>
    </div>
        </div>
        <div id="footer">
            <?php include 'inc/footer.php'; ?>
        </div>
    </div>
</body>
</html>
