<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Prueba clase</title>
</head>
<body>
<p>
<?php
include 'clases/Estudiante.php';



//$persona=new Estudiante("rony","cb200301",true,1,"Franklin","Cortez",28," 6 avenida norte","abril","23340003","franklinronygmail.com","cb201101","ing sistemas",36,147,8.2);
$estudiante=new Estudiante($_POST['usuario'],$_POST['password'],$_POST['activo'],$_POST['grupo'],$_POST['nombres'],$_POST['apellidos'],$_POST['edad'],$_POST['direccion'],$_POST['fechanacimiento'],$_POST['telefono'],$_POST['correo'],$_POST['carnet'],$_POST['carrera'],$_POST['materiasaprobadas'],$_POST['uvs'],$_POST['cum']);

//echo $persona;
//echo $estudiante;
?>
</p>
<div align="center">
<form action="prueba.php" method="post">
  <table width="630" border="0">
  <tr>
    <td width="92"><label>Nombres</label></td>
    <td width="522"><input name="nombres" type="text"></td>
  </tr>
  <tr>
    <td><label>Apellidos:</label>&nbsp;</td>
    <td>
      <input type="text" name="apellidos" id="apellidos">
    </td>
  </tr>
  <tr>
    <td><label>Edad:</label>&nbsp;</td>
    <td><label>
      <input type="text" name="edad" id="edad">
    </label></td>
  </tr>
  <tr>
    <td><label>Direccion:</label>&nbsp;</td>
    <td><label>
      <input type="text" name="direccion" id="direccion">
    </label></td>
  </tr>
  <tr>
    <td><label>Fecha de nacimiento:</label>&nbsp;</td>
    <td><label>
      <input type="text" name="fechanacimiento" id="fechanacimiento">
    </label></td>
  </tr>
  <tr>
    <td><label>Telefono:</label>&nbsp;</td>
    <td><label>
      <input type="text" name="telefono" id="telefono">
    </label></td>
  </tr>
  <tr>
    <td><label>Correo Electronico:</label>&nbsp;</td>
    <td><label>
      <input type="text" name="correo" id="correo">
    </label></td>
  </tr>
  <tr>
    <td><label>Carnet:</label>&nbsp;</td>
    <td><label>
      <input type="text" name="carnet" id="carnet">
    </label></td>
  </tr>
  <tr>
    <td><label>Carrera:</label>&nbsp;</td>
    <td><label>
      <input type="text" name="carrera" id="carrera">
    </label></td>
  </tr>
  <tr>
    <td><label>Materias Aprobadas:</label>&nbsp;</td>
    <td><label>
      <input type="text" name="materiasaprobadas" id="materiasaprobadas">
    </label></td>
  </tr>
  <tr>
    <td><label>Unidades Valorativas:</label>&nbsp;</td>
    <td><label>
      <input type="text" name="uvs" id="uvs">
    </label></td>
  </tr>
  <tr>
    <td><label>CUM</label>&nbsp;</td>
    <td><label>
      <input type="text" name="cum" id="cum">
    </label></td>
  </tr>
  <tr>
    <td><label>Usuario:</label>&nbsp;</td>
    <td><label>
      <input type="text" name="usuario" id="usuario">
    </label></td>
  </tr>
  <tr>
    <td><label>Password</label>&nbsp;</td>
    <td><label>
      <input type="password" name="password" id="password">
    </label></td>
  </tr>
  <tr>
    <td><label>Activo</label>&nbsp;</td>
    <td><label>
      <input type="text" name="activo" id="activo">
    </label></td>
  </tr>
  <tr>
    <td><label>Grupo:</label>&nbsp;</td>
    <td><label>
      <input type="text" name="grupo" id="grupo">
    </label></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="button" id="button" value="Enviar"></td>
  </tr>
</table>

</form>
</div>

</body>
</html>
