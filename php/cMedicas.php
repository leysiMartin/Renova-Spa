<?php
/**
 * Se llama el archivo "general.class.php" para poder usar las funciones correspondientes a utilizar
 * @param $objeto es la nueva variable contenedora de la nueva seleccion 
 * @param $contenido obtiene el valor de la funcion verCMedicas()
 */
require_once("general.class.php");	
$objeto = new Seleccion;
$contenido=$objeto->verCMedicas();
?>
<head>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/styles.css" rel="stylesheet">
</head>
<div class="container">
    <div class="page-header">
	      <h2>A continuación se muestran todas las circunstancias medicas registradas</h2>
    </div>
	<div class="body">	
	<div class="table-responsive">
		<div id="tablaTicket">
			<table class="table table-striped">
				<tr>
					<td>Id</td>
					<td>Nombre</td>
					
				</tr>
			<?php
			/**
			 * @param la variable $res es la encargada de distribuir en la tabla correspondiente los valores que se obtengan en la variable $contenido, con la ayuda de la funcion propia de PHP "mysql_fetch_array"
			 */
				 while($res = mysql_fetch_array($contenido))
				 {
			?>
			<tr id="contenidoTabla">
				<td><?php echo $res['id'];?></td>
				<td><?php echo $res['nombre'];?></td>
			</tr>
			<?php
				}
			?>
			</table>
			</div>	
		</div>
		<div class="row">
		  <div class="col-md-6">
		  <form action="crearCMedica.php" method="post">
		  	<input type="text" class="form-control"  placeholder="Intruzca el nombre de la neuva circunstancia medica" required name="cMedica">
		  	<br>
		  	<button type="submit" class="btn btn-primary">Crear</button>
		  </form>
		  </div>
		  <form action="conexionEliminarCMedica.php" method="post">
			  <div class="col-md-6">
			  	<input type="text" class="form-control"  placeholder="Seleccione el id" required name="id">
			  	<br>
			  	<button type="submit" class="btn btn-primary">Eliminar</button>
			  </div>
			</form>
		</div>
		<div class="form-group">
			<a href="superUsuario.php"><h2>Volver a la vista de las tablas</h2></a>
		</div>
	</div>