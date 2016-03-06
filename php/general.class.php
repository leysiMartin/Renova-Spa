<?php
/** * incluye todo lo que esta en el archivo conexion.php */
include_once("conexion.php");
/** 
* @package renovaSpa 
* @subpackage php 
* @author Gonzalez Cauich Omar Alejandro < omargonzalez9911@yahoo.com>
*/ 

class Seleccion
{	
	var $con;
	/**
	 * @param Seleccion() es el constructor de la clase Seleccion del archivo conexionClase.php
	 */
	function Seleccion(){
		$this->con = new bd;
	 }
	 /**
	 * @param sesionUsuario($usuario,$password) es la funcion encargada de seleccionar el password y el email del superusuario (si este fuera el caso de que este quisiera acceder), hace una consulta a la base de datos.
	 * @param $sql encargada de almacenar el script sql 
	 * @return regresa el script.
	 */
	 function sesionUsuario($usuario,$password){	 			
	    if ($this->con->conectar()==true){
	 	    
	 	    $sql="SELECT password, email FROM superusuario WHERE email ='".$usuario."' AND password='".$password."'";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 /**
	 * @param sesionRecepcionista($usuario,$password) es la funcion encargada de seleccionar el password y el email del recepcionista (si este fuera el caso de que este quisiera acceder), hace una consulta a la base de datos.
	 * @param $sql encargada de almacenar el script sql 
	 * @return regresa el script.
	 */
	 function sesionRecepcionista($usuario,$password){	 			
	    
	    if ($this->con->conectar()==true){
	 	    $sql="SELECT password, email FROM recepcionista WHERE email ='".$usuario."' AND password='".$password."'";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 /**
	 * @param sesionRecepcionista($usuario,$password) es la funcion encargada de seleccionar el password y el email del recepcionista (si este fuera el caso de que este quisiera acceder), hace una consulta a la base de datos.
	 * @param $sql encargada de almacenar el script sql 
	 * @return regresa el script.
	 */
	 function altaCliente($usuario,$apellidos,$edad,$habitacion,$email,$pais,$idioma,$hotel,$fecha,$agencia,$tratamiento,$terapeuta,$circunstancia,$opinion){	 			
	    if ($this->con->conectar()==true){
	 	    
	 	    $sql="INSERT INTO clientes(pais_id,idioma_id,hotel_id,agencia_id,tratamiento_id,	terapeuta_id,circustancias_medica_id,fecha_alta,nombre,apellidos,edad,correo_electronico,habitacion,opinion) 
	 	    VALUES ('".$pais."', '".$idioma."', '".$hotel."', '".$agencia."', '".$tratamiento."', '".$terapeuta."','".$circunstancia."', '".$fecha."', '".$usuario."', '".$apellidos."', '".$edad."','".$email."', '".$habitacion."', '".$opinion."')";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 /**
	 * @param verPaises() selecciona todas las columnas de la tabla paises
	 * @param $sql encargada de almacenar el script sql 
	 * @return regresa el script.
	 */
	 function verPaises(){	 			
	    
	    if ($this->con->conectar()==true){
	 	   
	 	    $sql="SELECT * FROM paises";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 /**
	 * @param verTerapeutas() selecciona todas las columnas de la tabla terapeutas
	 * @param $sql encargada de almacenar el script sql 
	 * @return regresa el script.
	 */
	 function verTerapeutas(){	 			
	    if ($this->con->conectar()==true){
	 	   
	 	    $sql="SELECT * FROM terapeutas";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 /**
	 * @param buscarTerapeuta($email) selecciona el email de la tabla terapeutas
	 * @param $sql encargada de almacenar el script sql 
	 * @return regresa el script.
	 */
	 function buscarTerapeuta($email)
	 {	 			
	    if ($this->con->conectar()==true)
	    {
	 	    $sql="SELECT email FROM terapeutas WHERE email='".$email."'";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 /**
	 * @param buscarIdTerapeuta selecciona el id de la tabla terapeutas
	 * @param $sql encargada de almacenar el script sql 
	 * @return regresa el script.
	 */
	 function buscarIdTerapeuta($id)
	 {	 			
	    if ($this->con->conectar()==true)
	    {
	 	    $sql="SELECT id FROM terapeutas WHERE id='".$id."'";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 /**
	 * @param crearTerapeuta($nombre,$apellidos,$telefono,$sexo,$email) crear un nuevo terapeuta en la tabla terapeutas
	 * @param $sql encargada de almacenar el script sql 
	 * @return regresa el script.
	 */
	  function crearTerapeuta($nombre,$apellidos,$telefono,$sexo,$email)
	 {	 			
	    if ($this->con->conectar()==true)
	    {
	 	    $sql="INSERT INTO terapeutas(nombre,apellidos,sexo,telefono,email) 
	 	    VALUES ('".$nombre."', '".$apellidos."', '".$sexo."', '".$telefono."', '".$email."')";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 /**
	 * @param eliminarTerapeuta($id) elimina a un terapeuta en la tabla terapeutas
	 * @param $sql encargada de almacenar el script sql 
	 * @return regresa el script.
	 */
	 function eliminarTerapeuta($id)
	 {	 			
	    if ($this->con->conectar()==true)
	    {
	 	    $sql="DELETE FROM terapeutas WHERE id='".$id."'";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 /**
	 * @param verCMedicas() selecciona todas las columnas de la tabla circuntancias_medicas
	 * @param $sql encargada de almacenar el script sql 
	 * @return regresa el script.
	 */
	 function verCMedicas(){	 			
	    if ($this->con->conectar()==true){
	 	    
	 	    $sql="SELECT * FROM circustancias_medicas";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 /**
	 * @param buscarCMedicas($cMedica) selecciona la columna nombre de la tabla circuntancias_medicas
	 * @param $sql encargada de almacenar el script sql 
	 * @return regresa el script.
	 */
	 function buscarCMedicas($cMedica){	 			
	    
	    if ($this->con->conectar()==true){
	 	    $sql="SELECT nombre FROM circustancias_medicas WHERE nombre='".$cMedica."'";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 /**
	 * @param crearCMedica($nombre) crea una nueva circunstancia medica en la tabla circuntancias_medicas
	 * @param $sql encargada de almacenar el script sql 
	 * @return regresa el script.
	 */
	 function crearCMedica($nombre){	 			
	    
	    if ($this->con->conectar()==true){
	 	    $sql="INSERT INTO circustancias_medicas(nombre) 
	 	    VALUES ('".$nombre."')";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 /**
	 * @param buscarIdCMedica($id) busca el id de la circunstancia medica solicitada en la tabla circuntancias_medicas
	 * @param $sql encargada de almacenar el script sql 
	 * @return regresa el script.
	 */
	 function buscarIdCMedica($id){	 			
	    
	    if ($this->con->conectar()==true){
	 	    $sql="SELECT id FROM circustancias_medicas WHERE id='".$id."'";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 /**
	 * @param eliminarIdCMedica($id) busca el id de la circunstancia medica solicitada en la tabla circuntancias_medicas y lo eliina
	 * @param $sql encargada de almacenar el script sql 
	 * @return regresa el script.
	 */
	 function eliminarIdCMedica($id){	 			
	    
	    if ($this->con->conectar()==true){
	 	    $sql="DELETE FROM circustancias_medicas WHERE id='".$id."'";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 /**
	 * @param verTratamientos() selecciona todas las columnas de la tabla tratamientos
	 * @param $sql encargada de almacenar el script sql 
	 * @return regresa el script.
	 */
	 function verTratamientos(){	 			
	    
	    if ($this->con->conectar()==true){
	 	    $sql="SELECT * FROM tratamientos";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 /**
	 * @param buscarTratamiento($nombre) selecciona la columna nombre de la tabla tratamientos
	 * @param $sql encargada de almacenar el script sql 
	 * @return regresa el script.
	 */
	 function buscarTratamiento($nombre){	 			
	   
	    if ($this->con->conectar()==true){
	 	    $sql="SELECT nombre FROM tratamientos WHERE nombre='".$nombre."'";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 /**
	 * @param crearTratamiento($nombre) selecciona la columna nombre de la tabla tratamientos y crea un nuevo tratamiento
	 * @param $sql encargada de almacenar el script sql 
	 * @return regresa el script.
	 */
	 function crearTratamiento($nombre){	 			
	    
	    if ($this->con->conectar()==true){
	 	    $sql="INSERT INTO tratamientos(nombre) 
	 	    VALUES ('".$nombre."')";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 /**
	 * @param buscarIdTratamiento($id) selecciona la columna id de la tabla tratamientos 
	 * @param $sql encargada de almacenar el script sql 
	 * @return regresa el script.
	 */
	 function buscarIdTratamiento($id){	 			
	    
	    if ($this->con->conectar()==true){
	 	    $sql="SELECT id FROM tratamientos WHERE id='".$id."'";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 /**
	 * @param eliminarIdTratamiento($id) selecciona la columna id de la tabla tratamientos y elimina el id 	que se mande
	 * @param $sql encargada de almacenar el script sql 
	 * @return regresa el script.
	 */
	 function eliminarIdTratamiento($id){	 			
	    if ($this->con->conectar()==true){
	 	    $sql="DELETE FROM tratamientos WHERE id='".$id."'";
	 		return $select=mysql_query($sql);
	 	}
	 }
}

?>