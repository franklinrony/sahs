<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Ingreso Usuario</title>
    <link rel="stylesheet" href="css/navbar.css" type="text/css"  media="all">
    <link rel="stylesheet" href="css/principal.css" type="text/css"  media="all">
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
    <div id="main">
        <div id="header">
            <?php  include 'inc/header.php';?>
        </div>
        <div id="navbar">
            <?php include 'inc/nav.php';?>
        </div>
        <!--formulario de login -->
        <div id="content">
		    <div class="login">
      <h1>Ingresar al sistema</h1>
      <form method="post" action="">
        <p><input type="text" name="login" value="Usuario"></p>
        <p><input type="password" name="password" value="Password"></p>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Recordarme en este equipo
          </label>
        </p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
      </form>
    </div>
        </div>
        <div id="footer">
            <?php include 'inc/footer.php'; ?>
        </div>
    </div>
</body>
</html>
