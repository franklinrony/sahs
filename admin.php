<!--Esta página sólo podrá ser vista por el administrador...-->
<?php /*evaluamos a través del archivo validar_administrador.php si el usuario que ha iniciado sesión es en efecto administrador*/  
include_once 'inc/validar_administrador.php';

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="description" content="Sistema automatizado de Horas sociales-Universidad Politecnica de El Salvador">
	<meta name="keywords" content="sahs, principal, horas sociales,servicio social">
    <title>Panel Administrador</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="css/principal.css" type="text/css"  media="all">

</head>
<body>
<?php define('_SAHS_',true);  ?>      
<div id="main">
        <div id="header">
            <?php  include 'inc/header.php';?>
        </div>
        <div id="navbar" >
            <?php include 'inc/nav.php';?>
        </div>
        <div id="content">
            <div class="container">
            	<div class="row">
            		<div class="span2">
						<ul class="nav nav-pills nav-stacked">
							<li class="active">item1</li>
							<li> <a href="admin/agregar_usuario.php">item2</a> </li>
						</ul>
					</div>
            		<div  class="span10">
						<h2>Bienvenido al Panel de Administrador</h2>
						<p>En este panel puede dar mantenimiento a los usuarios:Agregar usuarios,modificar y 
						Deshabilitarlos si tiene los suficientes permisos<br>
						Ademas puede aprobar nuevos proyectos, imprimir reportes,enviar correos a los usuarios. <br>
						utilice los menus de kla derecha pra acceder a las diferenes categorias.
						</p>

					</div>
            	</div>
            </div>
        </div>
        <div id="footer">
            <?php include 'inc/footer.php'; ?>
        </div>
    </div>
</body>
</html>