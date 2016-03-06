<?php
/**
 * Se verifica que los parametros solicitados existan o que un campo no este vacio
 */
	if(isset($_POST['usuario']) AND isset($_POST['password'])){
		
		if (!empty($_POST['usuario']) OR !empty($_POST['password']) ) {
		
			require_once('general.class.php');
			$sesion = new seleccion;
			/**
			 * se almacenan en variables los campos del archivo correspondiente
			 */
			$usuario = htmlentities($_POST['usuario']);
			$password = htmlentities($_POST['password']);	
			/**
			  * se compara el email para saber si en realidad existe, si es asi accede al sistema sino manda un error
			  */ 
			$consultaUsuario =$sesion->sesionUsuario($usuario,$password);
			$consultaRecepcionista =$sesion->sesionRecepcionista($usuario,$password);

			if (mysql_num_rows($consultaUsuario)>0) {
				session_start();
				header("location: superUsuario.php");
			}else{
				echo '<script language="javascript">alert("Usuario y/o contraseña incorrectos");</script>';
			}

			if (mysql_num_rows($consultaRecepcionista)>0) {
				session_start();
				header("location: recepcionista.php");
			}else{
				echo '<script language="javascript">alert("Usuario y/o contraseña incorrectos Recepcionista");</script>';
			}


		}
		else{
			echo "Falto ingresar un dato";
		}

	}else{
		echo "Datos no ingresados";
	}
?>