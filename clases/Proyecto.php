<?php
/*Clase que contiene los atribuos de las empresas,asi como sus metodos
*/
class  Proyecto{
	//atributos
    private $nombre_proyecto;
    private $descripcion;
    private $localidad;
    private $fechain;
    private $fechafin;
    private $duracion;
	private $observacion;
	//private $estado;
  
    //constructor
  	public function __construct($nombre_proyecto,$descripcion,$localidad,$fechain,$fechafin,$duracion,$observacion){
	  $this->nombre_proyecto=$nombre_proyecto;
      $this->descripcion=$descripcion;
      $this->localidad=$localidad;
      $this->fechain=$fechain;
	  $this->fechafin=$fechafin;
      $this->duracion=$duracion;
      $this->observacion=$observacion;
	  //$this->estado=$estado;
    }
    //definicion de getter y setter
 	public function __get($propertyName) {
		if (property_exists('Proyecto',$propertyName )) {
			return $this->$propertyName ;
		} else {
			return $propertyName.' no existe en esta clase';
		}
	}
	//tostring
	public function __toString(){
		$cadena="";
		$cadena.="Nombre proyecto: ".$this->nombre_proyecto."<br />";
		$cadena.="Descripcion: ".$this->descripcion."<br />";
		$cadena.= "Localidad: ".$this->localidad."<br />";
		$cadena.="Fecha Inicio: ".$this->fechain."<br />";
		$cadena.="Fech Fin: ".$this->fechafin."<br />";
		$cadena.= "Duracion: ".$this->duracion."<br />";
		$cadena.= "observaciones: ".$this->observacion."<br />";
		//$cadena.= "Estado: ".$this->estado."<br />";
		return $cadena;
		}
    
}

?>