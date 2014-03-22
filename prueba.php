<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
<p >
<?php
include('clases/Persona.php');
$persona=new Persona("Franklin ROny","Cortez",27,"6 avenida norte","07/03/86","23340003","franklinrony2@gmail.com");
echo "Hola".$persona->nombres;
?></p>	
</body>
</html>
