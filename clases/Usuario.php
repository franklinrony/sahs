<?php 
/*Clase usuario para el login en la bd
*/
class Usuario{
	private $usuario;
	private $password;
	private $activo;
	private $grupo;
	
	//constructor 
	public function __construct($usuario,$password,$activo,$grupo){
		$this->usuario=$usuario;
		$this->password=$password;
		$this->activo=$activo;
		$this->grupo=$grupo;
		}

    //definicion de getter y setter
 	public function __get($propertyName) {
		if (property_exists('Usuario',$propertyName )) {
			return $this->$propertyName ;
		} else {
			return $propertyName.' no existe';
		}
	}
	
		//tostring
	public function __toString(){
		$cadena="";
		$cadena.="Usuario: ".$this->usuario."<br />";
		$cadena.="Password: ".$this->password."<br />";
		$cadena.= "Activo: ".$this->activo."<br />";
		$cadena.="Grupo: ".$this->grupo."<br />";
		return $cadena;
		}
		
}
?>