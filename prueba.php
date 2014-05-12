<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Prueba clase</title>
</head>
<body>
<p>
<?php
include 'clases/Proyecto.php';


$proyecto=new Proyecto($_POST['nombre_proyecto'],$_POST['descripcion'],$_POST['localidad'],$_POST['fechain'],$_POST['fechafin'],$_POST['duracion'],$_POST['observacion']);

echo $proyecto;
?>
</p>

</body>
</html>
