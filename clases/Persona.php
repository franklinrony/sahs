<?php
/*Clase base para otras clases del sistema:
*Estudiante
*Administrador
*Monitor
*Administrativo
*/
include_once 'Usuario.php';
abstract class  Persona extends Usuario {

    private $nombres;
    private $apellidos;
    private $edad;
    private $direccion;
    private $fechaNacimiento;
    private $telefono;
    private $correo;
  
    //constructor
  	public function __construct($usuario,$password,$activo,$grupo,$nombres,$apellidos,$edad,$direccion,$fechaNacimiento,$telefono,$correo){
      parent::__construct($usuario,$password,$activo,$grupo);
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
		if (property_exists('Persona',$propertyName )) {
			return $this->$propertyName ;
		} else {
			return $propertyName.' no existe en esta clase';
		}
	}
	//tostring
	public function __toString(){
		$cadena=parent::__toString();
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