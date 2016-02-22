<?php
	if(isset($_POST['tratamiento'])){
		
		if (!empty($_POST['tratamiento'])) {

			require_once('general.class.php');
			$funcion = new seleccion;
			// se almacenan en variables los campos del archivo "altaTecnico.php"
			$nombre = htmlentities($_POST['tratamiento']);
			
			// se compara el email para saber si existe, en daod caso de que no se crea al nuevo tecnico s
			$busqueda=$funcion->buscarTratamiento($nombre);
			if (mysql_num_rows($busqueda)>0) {
					echo '<script language="javascript">alert("Ya Existe Un Tratamiento con este nombre, Por Favor Intenta De Nuveo");</script>';
					echo "<script>location.href='tratamientos.php'</script>";	
				}else{
					$funcion->crearTratamiento($nombre);
					echo '<script language="javascript">alert("Registrado Correctamente");</script>';
					echo "<script>location.href='tratamientos.php'</script>";	
				}
				// alerta
		}
		else{
			echo '<script language="javascript">alert("Los Campos Estan Vacios, Por Favor Vuleva  intentar");</script>';
			echo "<script>location.href='tratamientos.php'</script>";
		}
		// alerta
	}else{
		echo '<script language="javascript">alert("Faltaron Algunos Campos Por Rellenar");</script>';
		echo "<script>location.href='tratamientos.php'</script>";
	}
?>