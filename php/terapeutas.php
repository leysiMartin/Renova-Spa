<?php
/**
 * Se llama el archivo "general.class.php" para poder usar las funciones correspondientes a utilizar
 * @param $objeto es la nueva variable contenedora de la nueva seleccion 
 * @param $contenido obtiene el valor de la funcion verCMedicas()
 */
require_once("general.class.php");	
$objeto = new Seleccion;
$contenido=$objeto->verTerapeutas();	
?>
<head>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/styles.css" rel="stylesheet">
</head>
<div class="container">
    <div class="page-header">
	      <h2>A continuación se muestran todos los terapeutas registrados</h2>
    </div>
	<div class="body">	
	<div class="table-responsive">
		<div id="tablaTicket">
			<table class="table table-striped">
				<tr>
					<td>Id</td>
					<td>Nombre</td>
					<td>Apellidos</td>
					<td>Sexo</td>
					<td>Telefono</td>
					<td>Email</td>
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
				<td><?php echo $res['apellidos'];?></td>
				<td><?php echo $res['sexo'];?></td>
				<td><?php echo $res['telefono'];?></td>
				<td><?php echo $res['email'];?></td>
			</tr>
			<?php
				}
			?>
			</table>
			</div>	
		</div>
	</div>
		<div class="row">
		  <div class="col-md-4">
		  	<a href="crearTerapeuta.php"><button type="button" class="btn btn-primary">Crear</button></a>
		  </div>
		  <form action="conexionEliminarTerapeuta.php" method="post">
			  <div class="col-md-4">
			  	<input type="text" class="form-control"  placeholder="Seleccione el id" required name="id">
			  </div>
			  <div class="col-md-4">
			  	<button type="submit" class="btn btn-primary">Eliminar</button>
			  </div>
			</form>
		</div>
		<div class="form-group">
			<a href="superUsuario.php"><h2>Volver a la vista de las tablas</h2></a>
		</div>
	</div>