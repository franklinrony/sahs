
<html>
<head>
<?php 
//este es un arhivo seguro no será mostrado si la sesión ha caducado...
session_start();
if(!$_SESSION["activo"]){

	header("Location:salir.php");
	}

?>

</head>
<body>
<body>
</html>



