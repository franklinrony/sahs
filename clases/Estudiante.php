<?php
/* Especializacion de la clase Persona.
*reescribe el metodo toString de la clase Persona
* Agrega atributos y metodos propios
*/
//inclusion del archivo que contiene la clase Persona
include_once 'Persona.php';
class Estudiante extends Persona{
	private $carnet;
	private $carrera;
	private $materiasAprobadas;
	private $uvs;
	private $cum;
	private $competencias=array();
	
	public function __construct($nombres,$apellidos,$edad,$direccion,$fechaNacimiento,$telefono,$correo,$carnet,$carrera,$materiasAprobadas,$uvs,$cum){
		//uso de constructor de la clase persona
		parent::__construct($nombres,$apellidos,$edad,$direccion,$fechaNacimiento,$telefono,$correo);
		//atributos de la clase Estudiante
		$this->carnet=$carnet;
		$this->carrera=$carrera;
		$this->materiasAprobadas=$materiasAprobadas;
		$this->uvs=$uvs;
		$this->cum=$cum;
		
		}
	//getter de Estudiante
	 	public function __get($propertyName) {
		if (property_exists('Estudiante',$propertyName ) ) {
			return $this->$propertyName ;
		} else {
			return $propertyName.' no existe';
		}
	}
	//informacion del objeto Estudiante
	public function __toString(){
		$cadena=parent::__toString();	
		$cadena.= "Carnet: ".(string)$this->carnet."<br />";
		$cadena.="Carrera: ".(string)$this->carrera."<br />";
		$cadena.= "Materias Aprobadas:".(string)$this->materiasAprobadas."<br />";
		$cadena.="Unidades Valorativas: ".(string)$this->uvs."<br />";
		$cadena.= "CUM: ".(string)$this->cum."<br />";
		return $cadena;
		}
	}
?>