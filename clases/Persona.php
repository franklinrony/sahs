<?php
class  Persona {
    /*Clase base para otras clases del sistema:
     *Estudiante
     *Administrador
     *Monitor
     *Administrativo
     */
    public $nombres;
    private $apellidos;
    private $edad;
    private $direccion;
    private $fechaNacimiento;
    private $telefono;
    private $correo;
    
    //constructor
    public function __contruct($nombres,$apellidos,$edad,$direccion,$fechaNacimiento,$telefono,$correo){
      $this->nombres=$nombres;
      $this->apellidos=$apellidos;
      $this->edad=$edad;
      $this->direccion=$direccion;
      $this->fechaNacimiento=$fechaNacimiento;
      $this->telefono=$telefono;
      $this->correo=$correo;
    }
    //definicion de getter y setter
    public function getNombres(){
        return $this->nombres;
    }
    
}

?>