<?php
	if(isset($_POST['id'])){
		
		if (!empty($_POST['id'])) {

			require_once('general.class.php');
			$funciones = new seleccion;
			// se almacenan en variables los campos del archivo "altaTecnico.php"
			$id = htmlentities($_POST['id']);
			
			// se compara el email para saber si existe, en daod caso de que no se crea al nuevo tecnico s
			$busqueda=$funciones->buscarIdTratamiento($id);
			if (mysql_num_rows($busqueda)<0) {
					echo '<script language="javascript">alert("No existe ningun id con dicho valor");</script>';
					echo "<script>location.href='tratamientos.php'</script>";	
				}else{
					$funciones->eliminarIdTratamiento($id);
					echo '<script language="javascript">alert("Usario Eliminado Correctamente");</script>';
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