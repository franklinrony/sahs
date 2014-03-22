<?php 
//inclusion del archivo que contiene la clase Persona
include_once 'clases/Persona.php';
class Admin extends Persona{
	private $fechaIngreso;
	//constructor
	public function __construct($nombres,$apellidos,$edad,$direccion,$fechaNacimiento,$telefono,$correo,$fechaIngreso){
			parent::__construct($nombres,$apellidos,$edad,$direccion,$fechaNacimiento,$telefono,$correo);
			$this->fechaIngreso=$fechaIngreso;
		}
	//getter de Admin
	public function __get($propertyName) {
		if (property_exists('Admin',$propertyName ) ) {
			return $this->$propertyName ;
		} else {
			return $propertyName.' no existe';
		}
	}	
	//informacion del objeto Admin
	public function __toString(){
		$cadena=parent::__toString();	
		$cadena.= "Fecha de Ingreso: ".(string)$this->fechaIngreso."<br />";
			$cadena.= "Fecha de Ingreso: ".(string)$this->fecaIngreso."<br />";
		return $cadena;
		}
		
	}
?>