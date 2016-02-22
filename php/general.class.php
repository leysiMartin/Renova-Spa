<?php
include_once("conexion.php");
class Seleccion
{	
	var $con;
	//constructor de la clase Seleccion del archivo conexionClase.hp
	function Seleccion(){
		$this->con = new bd;
	 }
	 function sesionUsuario($usuario,$password)
	 {	 			
	 	//Checar validacion de variables con isString de php
	    if ($this->con->conectar()==true)
	    {
	 	    $sql="SELECT password, email FROM superusuario WHERE email ='".$usuario."' AND password='".$password."'";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 function verTerapeutas()
	 {	 			
	 	//Checar validacion de variables con isString de php
	    if ($this->con->conectar()==true)
	    {
	 	    $sql="SELECT * FROM terapeutas";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 function buscarTerapeuta($email)
	 {	 			
	 	//Checar validacion de variables con isString de php
	    if ($this->con->conectar()==true)
	    {
	 	    $sql="SELECT email FROM terapeutas WHERE email='".$email."'";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 function buscarIdTerapeuta($id)
	 {	 			
	 	//Checar validacion de variables con isString de php
	    if ($this->con->conectar()==true)
	    {
	 	    $sql="SELECT id FROM terapeutas WHERE id='".$id."'";
	 		return $select=mysql_query($sql);
	 	}
	 }
	  function crearTerapeuta($nombre,$apellidos,$telefono,$sexo,$email)
	 {	 			
	 	//Checar validacion de variables con isString de php
	    if ($this->con->conectar()==true)
	    {
	 	    $sql="INSERT INTO terapeutas(nombre,apellidos,sexo,telefono,email) 
	 	    VALUES ('".$nombre."', '".$apellidos."', '".$sexo."', '".$telefono."', '".$email."')";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 function eliminarTerapeuta($id)
	 {	 			
	 	//Checar validacion de variables con isString de php
	    if ($this->con->conectar()==true)
	    {
	 	    $sql="DELETE FROM terapeutas WHERE id='".$id."'";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 function verCMedicas()
	 {	 			
	 	//Checar validacion de variables con isString de php
	    if ($this->con->conectar()==true)
	    {
	 	    $sql="SELECT * FROM circustancias_medicas";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 function buscarCMedicas($cMedica)
	 {	 			
	 	//Checar validacion de variables con isString de php
	    if ($this->con->conectar()==true)
	    {
	 	    $sql="SELECT nombre FROM circustancias_medicas WHERE nombre='".$cMedica."'";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 function crearCMedica($nombre)
	 {	 			
	 	//Checar validacion de variables con isString de php
	    if ($this->con->conectar()==true)
	    {
	 	    $sql="INSERT INTO circustancias_medicas(nombre) 
	 	    VALUES ('".$nombre."')";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 function buscarIdCMedica($id)
	 {	 			
	 	//Checar validacion de variables con isString de php
	    if ($this->con->conectar()==true)
	    {
	 	    $sql="SELECT id FROM circustancias_medicas WHERE id='".$id."'";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 function eliminarIdCMedica($id)
	 {	 			
	 	//Checar validacion de variables con isString de php
	    if ($this->con->conectar()==true)
	    {
	 	    $sql="DELETE FROM circustancias_medicas WHERE id='".$id."'";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 function verTratamientos()
	 {	 			
	 	//Checar validacion de variables con isString de php
	    if ($this->con->conectar()==true)
	    {
	 	    $sql="SELECT * FROM tratamientos";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 function buscarTratamiento($nombre)
	 {	 			
	 	//Checar validacion de variables con isString de php
	    if ($this->con->conectar()==true)
	    {
	 	    $sql="SELECT nombre FROM tratamientos WHERE nombre='".$nombre."'";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 function crearTratamiento($nombre)
	 {	 			
	 	//Checar validacion de variables con isString de php
	    if ($this->con->conectar()==true)
	    {
	 	    $sql="INSERT INTO tratamientos(nombre) 
	 	    VALUES ('".$nombre."')";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 function buscarIdTratamiento($id)
	 {	 			
	 	//Checar validacion de variables con isString de php
	    if ($this->con->conectar()==true)
	    {
	 	    $sql="SELECT id FROM tratamientos WHERE id='".$id."'";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 function eliminarIdTratamiento($id)
	 {	 			
	 	//Checar validacion de variables con isString de php
	    if ($this->con->conectar()==true)
	    {
	 	    $sql="DELETE FROM tratamientos WHERE id='".$id."'";
	 		return $select=mysql_query($sql);
	 	}
	 }
}

?>