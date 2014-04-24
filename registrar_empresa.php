
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="description" content="Sistema automatizado de Horas sociales-Universidad Politecnica de El Salvador">
	<meta name="keywords" content="sahs, principal, horas sociales,servicio social">
    <title>Registro de empresa</title>
    <link rel="stylesheet" href="css/navbar.css" type="text/css"  media="all">
	<link rel="stylesheet" href="css/principal.css" type="text/css"  media="all">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.css">
 
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
        <div><p class="alert alert-info" >Para registrar una cuenta Rellene el siguiente formulario.<br />Pronto nos comunicaremos con ud.</p></div>

          <form name="form1" method="post" action="" >
            <table width="408" border="0" class="centrarform">
              <tr>
                <td width="159"><label>Nombre Empresa:</label>&nbsp;</td>
                <td width="233"><label>
                  <input type="text" name="nombre" id="nombre">
                </label></td>
              </tr>
              <tr>
                <td><label>Direccion:</label>&nbsp;</td>
                <td><label>
                  <input type="text" name="direccion" id="direccion">
                </label></td>
              </tr>
              <tr>
                <td><label>Telefono:</label>&nbsp;</td>
                <td><label>
                  <input type="text" name="telefono" id="telefono">
                </label></td>
              </tr>
              <tr>
                <td><label>Nombre Representante:</label>&nbsp;</td>
                <td><label>
                  <input type="text" name="representante" id="representante">
                </label></td>
              </tr>
              <tr>
                <td><label>Correo Electronico</label>&nbsp;</td>
                <td><label>
                  <input type="text" name="correo electronico" id="email">
                </label></td>
              </tr>
              <tr>
                <td><label>Usuario:</label>&nbsp;</td>
                <td><label>
                  <input type="text" name="usuario" id="usuario">
                </label></td>
              </tr>
              <tr>
                <td><label>Password:</label>&nbsp;</td>
                <td><label>
                  <input type="password" name="password" id="password">
                </label></td>
              </tr>
              <tr>
                <td>Repetir Password:</td>
                <td><label>
                  <input type="password" name="repassword" id="repassword">
                </label></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
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