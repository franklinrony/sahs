<?php 
/*Clase usuario para el login en la bd
*/
class Usuario{
	public $usuario; //para el caso de los estudiantes el nombre de usuario es el carnet...
	public $password;
	public $tipo_usuario;
	private $activo;
	private $grupo;
	
	//constructor 
	public function __construct($usuario,$password,$activo,$grupo){
		$this->usuario=$usuario;
		$this->password=$password;
		$this->activo=$activo;
		$this->grupo=$grupo;
		}

    //definicion de getter y setter
 	public function __get($propertyName) {
		if (property_exists('Usuario',$propertyName )) {
			return $this->$propertyName ;
		} else {
			return $propertyName.' no existe';
		}
	}
	
		//tostring
	public function __toString(){
		$cadena="";
		$cadena.="Usuario: ".$this->usuario."<br />";
		$cadena.="Password: ".$this->password."<br />";
		$cadena.= "Activo: ".$this->activo."<br />";
		$cadena.="Grupo: ".$this->grupo."<br />";
		return $cadena;
		}
		
		
	//esta función nos permitirá consultar a la base de datos...
	
	public function consultarExistenciaUsuario(){
		
		//codificar query
		$query = "SELECT usuarios.tipo_usuario,estudiante.nombre_1,usuarios.password from usuarios,estudiante where usuarios.codigo = '{$this->usuario}' and estudiante.codigo ='{$this->usuario}' and usuarios.password='{$this->password}';";
		
		//ejecutamos query
		$dataSet = mysql_query($query);
		
		
		//evaluamos si el usuario está en la base de datos...
		if (mysql_num_rows($dataSet) > 0){
			
			//declaramos un array asociativo para tener acceso a los datos...
			$registro = mysql_fetch_assoc($dataSet);
			
			//iniciamos sesión para poder pasar los datos de página a página....
			session_start();
			//asignamos los valores correspondientes
			$_SESSION['tipo_usuario'] = $registro['tipo_usuario'];
			$_SESSION['nombre_usuario'] = $registro['nombre_1'];
			$_SESSION['activo']=true;
			return true;
		}
		else 
		return false;
		
		
		
		}
		
		
}
?>