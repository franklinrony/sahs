<?php
/*Clase que contiene los atribuos de las empresas,asi como sus metodos
*/
class  Empresa{
	//atributos
    private $nombre;
    private $direccion;
    private $telefono;
    private $representante;
    private $correo_representante;
    private $fecha_registro;
	private $usuario;
	private $password;
  
    //constructor
  	public function __construct($nombre,$direccion,$telefono,$representante,$correo_representante,$usuario,$password){
	  $this->nombre=$nombre;
      $this->direccion=$direccion;
      $this->telefono=$telefono;
      $this->representante=$representante;
      $this->correo_representante=$correo_representante;
    //  $this->fecha_registro=$fecha_registro;
	  $this->usuario=$usuario;
	  $this->password=$password;
    }
    //definicion de getter y setter
 	public function __get($propertyName) {
		if (property_exists('Empresa',$propertyName )) {
			return $this->$propertyName ;
		} else {
			return $propertyName.' no existe en esta clase';
		}
	}
	//tostring
	public function __toString(){
		$cadena="";
		$cadena.="Empresa: ".$this->nombre."<br />";
		$cadena.="Direccion: ".$this->direccion."<br />";
		$cadena.= "Telefono: ".$this->telefono."<br />";
		$cadena.="Representante: ".$this->representante."<br />";
		$cadena.="correo representante: ".$this->correo_representante."<br />";
		$cadena.= "Fecha de registro: ".$this->fecha_registro."<br />";
		$cadena.= "Usuario: ".$this->usuario."<br />";
		$cadena.= "Password: ".$this->password."<br />";
		return $cadena;
		}
    
}

?>