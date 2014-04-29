<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="description" content="Sistema automatizado de Horas sociales-Universidad Politecnica de El Salvador">
	<meta name="keywords" content="sahs, principal, horas sociales,servicio social">
    <title>Proyectos</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="css/principal.css" type="text/css"  media="all">

</head>
<body>
<?php define('_SAHS_',true);  ?>     
<?php /*comprobamos si el usuario ha iniciado sesión...*/  include_once 'inc/comprobar_usuario.php'; ?>
 
<div id="main">
        <div id="header">
            <?php  include 'inc/header.php';?>
        </div>
        <div id="navbar" >
            <?php include 'inc/nav.php';?>
        </div>
        <div id="content">
            <p>Esta es la página de proyectos</p>
        </div>
        <div id="footer">
            <?php include 'inc/footer.php'; ?>
        </div>
    </div>
</body>
</html>