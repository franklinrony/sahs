<?php
//este archivo va a dejar todo preparado para conectarnos a la base de datos....

include_once'config.php';
include_once'conexion.php';


//debemos hacer una instancia de la clase conexión...
$objeto_conexion = new conexion();
$objeto_conexion->contructor();

?>