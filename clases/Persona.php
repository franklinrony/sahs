<?php
class  Persona {
    /*Clase base para otras clases del sistema:
     *Estudiante
     *Administrador
     *Monitor
     *Administrativo
     */
    private $_nombres;
    private $_apellidos;
    private $_edad;
    private $_direccion;
    private $_fechaNacimiento;
    private $_telefono;
    private $_correo;
    
    //constructor
  	public function __construct($nombres,$apellidos,$edad,$direccion,$fechaNacimiento,$telefono,$correo){
      $this->_nombres=$nombres;
      $this->_apellidos=$apellidos;
      $this->_edad=$edad;
      $this->_direccion=$direccion;
      $this->_fechaNacimiento=$fechaNacimiento;
      $this->_telefono=$telefono;
      $this->_correo=$correo;
    }
    //definicion de getter y setter
    public function getNombres(){
        return $this->_nombres;
    }
	public function getApellidos(){
		return $this->_apellidos;
		}
    
}

?>