<?php
/**
	* Un ejemplo de clase *
	* Colocaremos la clase vacia para el ejemplo *
	*  @package renova Spa
	*  @subpackage php
	*  @author Leysi Martin Pat
	* */
class bd{
	/**
	 * $baseDatos almacena la base de datos que se usara
	 * $servidor almaena el valor de nuestro servidor
	 * $usuario indica el usuario que tiene derecho a acceder a esa base de datos
	 * $contrasena contiene el valor de la contrasena del usuario
	 */
	var $conexion;
	var $baseDatos;
	var $servidor;
	var $usuario;
	var $contrasena;
	/**
	  * funcion para asignarle a las variables los datos para la conexion a la bd
	  */
	function bd(){
		$this->baseDatos="spa";
		$this->servidor="localhost";
		$this->usuario="root";
		$this->contrasena="";

	}
	/**
	* la división de dos numeros
 	* @param $conex almacena la conexion a la base de datos para que al momento de agregar los datos se conecte correctamente
 	*/
	function conectar(){
		if (!($conex=@mysql_connect($this->servidor,$this->usuario,$this->contrasena))) {
			echo"<h1>Error al conectar a la base de datos</h1>";
			exit();
		}
		if (!@mysql_select_db($this->baseDatos,$conex)){
			echo "<h1>Error al seleccionar la base de datos</h1>";
			exit();
		}
		$this->conexion=$conex;
		return true;
	}
}
?>
