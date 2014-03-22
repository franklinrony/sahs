<?php
/*Clase base para otras clases del sistema:
*Estudiante
*Administrador
*Monitor
*Administrativo
*/
abstract class  Persona {

    private $_nombres;
    private $_apellidos;
    private $_edad;
    private $_direccion;
    private $_fechaNacimiento;
    private $_telefono;
    private $_correo;
  
    //constructor
  	public function __construct($nombres,$apellidos,$edad,$direccion,$fechaNacimiento,$telefono,$correo){
      $this->nombres=$nombres;
      $this->apellidos=$apellidos;
      $this->edad=$edad;
      $this->direccion=$direccion;
      $this->fechaNacimiento=$fechaNacimiento;
      $this->telefono=$telefono;
      $this->correo=$correo;

    }
    //definicion de getter y setter
 	public function __get($propertyName) {
		if (property_exists('Persona',$propertyName ) ) {
			return $this->$propertyName ;
		} else {
			return $propertyName.' no existe';
		}
	}	
	public function __toString(){
		$cadena="";
		$cadena.="Nombres: ".$this->nombres."<br />";
		$cadena.="Apellidos: ".$this->apellidos."<br />";
		$cadena.= "Edad: ".$this->edad."<br />";
		$cadena.="Direccion: ".$this->direccion."<br />";
		$cadena.="Fecha nacimiento: ".$this->fechaNacimiento."<br />";
		$cadena.= "Telefono: ".$this->telefono."<br />";
		$cadena.="Correo Electronico: ".$this->correo."<br />";		
		return $cadena;
		}
    
}

?>