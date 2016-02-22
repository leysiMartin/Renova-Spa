<?php
	if(isset($_POST['usuario']) AND isset($_POST['password'])){
		
		if (!empty($_POST['usuario']) OR !empty($_POST['password']) ) {
		
			require_once('general.class.php');
			$sesion = new seleccion;

			$usuario = htmlentities($_POST['usuario']);
			$password = htmlentities($_POST['password']);	

			$consultaUsuario =$sesion->sesionUsuario($usuario,$password);


			if (mysql_num_rows($consultaUsuario)>0) {
				session_start();
				header("location: superUsuario.php");
			}else{
				echo "Usuario y/o contraseña incorrectos";
			}

		}
		else{
			echo "Falto ingresar un dato";
		}

	}else{
		echo "Datos no ingresados";
	}
?>