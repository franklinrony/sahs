<?php 
/* clase Administrativo
*reescribe el metodo toString de la clase persona
*/
include_once 'Persona.php';
class Administrativo extends Persona{
		private $fechaIngreso;
	//constructor
	public function __construct($nombres,$apellidos,$edad,$direccion,$fechaNacimiento,$telefono,$correo,$fechaIngreso){
			parent::__construct($nombres,$apellidos,$edad,$direccion,$fechaNacimiento,$telefono,$correo);
			$this->fechaIngreso=$fechaIngreso;
		}
	//getter de Administrativo
	public function __get($propertyName) {
		if (property_exists('Administrativo',$propertyName ) ) {
			return $this->$propertyName ;
		} else {
			return $propertyName.' no existe';
		}
	}	
	//informacion del objeto Administrativo
	public function __toString(){
		$cadena=parent::__toString();	
		$cadena.= "Fecha de Ingreso: ".(string)$this->fechaIngreso."<br />";
		return $cadena;
		}
	
	}
?>

