<?php
	if(isset($_POST['cMedica'])){
		
		if (!empty($_POST['cMedica'])) {

			require_once('general.class.php');
			$funcion = new seleccion;
			// se almacenan en variables los campos del archivo "altaTecnico.php"
			$cMedica = htmlentities($_POST['cMedica']);
			
			// se compara el email para saber si existe, en daod caso de que no se crea al nuevo tecnico s
			$busqueda=$funcion->buscarCMedicas($cMedica);
			if (mysql_num_rows($busqueda)>0) {
					echo '<script language="javascript">alert("Ya Existe Una Circunstancia medica con este nombre, Por Favor Intenta De Nuveo");</script>';
					echo "<script>location.href='cMedica.php'</script>";	
				}else{
					$funcion->crearCMedica($cMedica);
					echo '<script language="javascript">alert("Registrado Correctamente");</script>';
					echo "<script>location.href='cMedica.php'</script>";	
				}
				// alerta
		}
		else{
			echo '<script language="javascript">alert("Los Campos Estan Vacios, Por Favor Vuleva  intentar");</script>';
			echo "<script>location.href='cMedica.php'</script>";
		}
		// alerta
	}else{
		echo '<script language="javascript">alert("Faltaron Algunos Campos Por Rellenar");</script>';
		echo "<script>location.href='cMedica.php'</script>";
	}
?>