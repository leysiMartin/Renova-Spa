<?php
/**
 * Se verifica que los parametros solicitados existan o que un campo no este vacio
 */
	if(isset($_POST['nombre']) AND isset($_POST['apellido']) AND isset($_POST['telefono']) AND isset($_POST['optionsRadios']) AND isset($_POST['email'])){
		
		if (!empty($_POST['nombre']) OR !empty($_POST['apellido']) OR !empty($_POST['telefono']) OR !empty($_POST['optionsRadios']) OR !empty($_POST['email'])) {
			require_once('general.class.php');
			$crear = new seleccion;
			/**
			 * se almacenan en variables los campos del archivo correspondiente
			 */
			$nombre = htmlentities($_POST['nombre']);
			$apellidos = htmlentities($_POST['apellido']);
			$telefono = htmlentities($_POST['telefono']);
			$sexo = htmlentities($_POST['optionsRadios']);
			$email = htmlentities($_POST['email']);
			/**
			  * se compara el email para saber si existe, en daod caso de que no se crea al nuevo registro
			  */ 
			$busqueda=$crear->buscarTerapeuta($email);
			if (mysql_num_rows($busqueda)>0) {
					echo '<script language="javascript">alert("Ya Existe Un nombre Registrado Con Dicho Email, Por Favor Intenta De Nuveo");</script>';
					echo "<script>location.href='altaTecnico.php'</script>";	
				}else{
					$crear->crearTerapeuta($nombre,$apellidos,$telefono,$sexo,$email);
					echo '<script language="javascript">alert("Usario Registrado Correctamente");</script>';
					echo "<script>location.href='superUsuario.php'</script>";	
				}
				// alerta
		}
		else{
			echo '<script language="javascript">alert("Los Campos Estan Vacios, Por Favor Vuleva  intentar");</script>';
			echo "<script>location.href='crearTerapeuta.php'</script>";
		}
		// alerta
	}else{
		echo '<script language="javascript">alert("Faltaron Algunos Campos Por Rellenar");</script>';
		echo "<script>location.href='crearTerapeuta.php'</script>";
	}
?>