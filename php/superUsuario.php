<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Crear Usuario</title>

  <!-- Bootstrap -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/styleBody.css">
  <script type="text/javascript" src="../js/general.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
  <body>
    <div class="container">
    	<div class="page-header">
	        <label for="">Aquí podras verificar informacion, acerca de los pacientes y personal.
	        Tambien tienes las posiblidades de crear, eliminar y actualizar informacion de tu personal.
	        <br>
	        A continuacion seleccione la tabla la cual desee visualizar.
	      	</label>
    	</div>
    	<div class="form-group">
	    	<div class="row">
			  <div class="col-md-4">
			  	<a href="terapeutas.php"><label for="" id="terapeutas">Terapeutas</label></a>
			  </div>
			  <div class="col-md-4">
			  	<a href="cMedicas.php"><label for="" id="clientes">Circunstancias medicas</label></a>
			  </div>
			  <div class="col-md-4">
			  	<a href="tratamientos.php"><label for="" id="opiniones">Tratamientos</label></a> 
			  </div>
			</div>
      <div class="form-group">
			<div id="tablas">
				
			</div>
      </div>
		</div> 
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>