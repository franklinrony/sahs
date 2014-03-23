<?php 
/*Clase Administrador que define los atributos de cada administador
*reescribe el metodo toString de la clase Persona
*/
//inclusion del archivo que contiene la clase Persona
include_once 'Persona.php';
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
		return $cadena;
		}
		
	}
?>