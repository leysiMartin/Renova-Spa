<?php
require_once("general.class.php");	
$objeto = new Seleccion;
$contenido=$objeto->verTratamientos();
?>
<head>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/styles.css" rel="stylesheet">
</head>
<div class="container">
    <div class="page-header">
	      <h2>A continuación se muestran todos los tratamientos registrados</h2>
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
		  <form action="conexionCrearTratamiento.php" method="post">
		  	<input type="text" class="form-control"  placeholder="Introduzca el nombre del nuevo tratamiento" required name="tratamiento">
		  	<br>
		  	<button type="submit" class="btn btn-primary">Crear</button>
		  </form>
		  </div>
		  <form action="conexionEliminarTratamiento.php" method="post">
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
	