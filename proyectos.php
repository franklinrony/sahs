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
<?php
 /*comprobamos si el usuario ha iniciado sesión...*/  
include_once 'inc/comprobar_usuario.php'; ?>
 
<div id="main">
        <div id="header">
            <?php  include 'inc/header.php';?>
        </div>
        <div id="navbar" >
            <?php include 'inc/nav.php';?>
        </div>
        <div id="content">
 
			<form name="form1" method="post" action="prueba.php" >
            <table width="408" border="0" class="centrarform">
              <tr>
                <td width="159"><label>Nombre del Proyecto:</label>&nbsp;</td>
                <td width="233">
                  <input type="text" name="nombre_proyecto" id="nombre_proyecto">
                </td>
              </tr>
              <tr>
                <td><label>Descripcion del Proyecto:</label>&nbsp;</td>
                <td><textarea name="descripcion" id="descripcion" cols="30" rows="5"></textarea></td>
              </tr>
              <tr>
                <td><label>Localidad:</label>&nbsp;</td>
                <td>
					<input type="text" name="localidad" id="localidad">
                </td>
              </tr>
              <tr>
                <td><label>Fecha Inicio:</label>&nbsp;</td>
                <td>
					<input type="text" name="fechain" id="fechain">
                </td>
              </tr>
              <tr>
                <td><label>Fecha Finalizacion</label>&nbsp;</td>
                <td>
					<input type="text" name="fechafin" id="fechafin">
                </td>
              </tr>
              <tr>
                <td><label>Duracion(en horas):</label>&nbsp;</td>
                <td>
					<input type="text" name="duracion" id="duracion">
                </td>
              </tr>
              <tr>
                <td><label>Observacion:</label>&nbsp;</td>
                <td>
					<input type="text" name="observacion" id="observacion">
                </td>
              </tr>
                <td align="center"><label>
                  <input type="reset" name="limpiar" id="limpiar" value="Limpiar" class="btn btn-primary">
                </label></td>
                <td align="center"><label>
                  <input type="submit" name="registrar" id="registrar" value="Registrar" class="btn btn-primary">
                </label></td>
              </tr>
            </table>
          </form>
        </div>
        <div id="footer">
            <?php include 'inc/footer.php'; ?>
        </div>
    </div>
</body>
</html>