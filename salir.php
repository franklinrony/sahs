<?php 
//en este archivo vamos a destruir la sesión...
session_start();
session_destroy();
header("Location:index.php");


?>