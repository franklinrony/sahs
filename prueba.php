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
include 'clases/Admin.php';
include 'clases/Administrativo.php';

$persona=new Estudiante("Franklin","Cortez",28," 6 avenida norte","abril","23340003","franklinronygmail.com","cb201101","ing sistemas",36,147,8.2);

echo $persona;
$admin=new Admin("Rony","Cortez",28,"7 av te","02/02/45","2333","dsdsd","8/25/12");
echo $admin;

$administrativo=new Administrativo("Rony","Cortez",28,"7 av te","02/02/45","2333","dsdsd","8/25/12");
echo $administrativo;
?>
</p>
</body>
</html>
