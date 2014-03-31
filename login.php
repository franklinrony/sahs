<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Ingreso Usuario</title>
    <link rel="stylesheet" href="css/navbar.css" type="text/css"  media="all">
    <link rel="stylesheet" href="css/principal.css" type="text/css"  media="all">
</head>
<body>
    <div id="main">
        <div id="header">
            <?php  include 'inc/header.php';?>
        </div>
        <div id="navbar">
            <?php include 'inc/nav.php';?>
        </div>
        <div id="content">
		<form action="" method="post">
			<table>
			    <tr>
				<td><label for="usuario">Usuario:</label></td>
				<td><input type="text" name="usuario" id="usuario"></td>
			    </tr>
			    <tr>
				<td><label for="password">Password:</label></td>
				<td><input type="password" name="password" id="password"></td>
			    </tr>
			    <tr>
				<td><button type="reset">Borrar</button></td>
				<td><button type="submit">Ingresar</button></td>
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
