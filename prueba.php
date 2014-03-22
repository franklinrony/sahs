<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>

<?php
include 'clases/Persona.php';

$persona=new Persona("Franklin","Cortez",28," 6 avenida norte","abril","23340003","franklinronygmail.com");
echo $persona->getNombres();
echo $persona->getApellidos();
?>
</body>
</html>
