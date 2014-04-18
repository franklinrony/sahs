<?php 
include_once 'settings.php';
//en este archivo vamos a destruir la sesión...
session_start();
session_destroy();
header("Location:"."http://".$_SERVER['HTTP_HOST'].$base."/index.php");


?>