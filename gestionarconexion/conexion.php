<?php
//esta es la clase que establece la conexión con la base de datos...
class conexion{
	private $enlace;
	
	function contructor(){
		$this->enlace = mysql_connect(BD_HOST,BD_USER,BD_PASSWORD);
		//seleccionamos la base de datos...
		mysql_select_db(BD_NOMBRE,$this->enlace);
		}
		
		
		function destructor(){
			//este función nos permite cerrar la conexión con la base de datos...
			mysql_close($this->enlace);
			}
			
			
			}

?>