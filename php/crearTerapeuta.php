<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Cuestionario</title>

  <!-- Bootstrap -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/styes.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
  <body><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Cuestionario</title>

  <!-- Bootstrap -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/styes.css">
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
    <div class="row">
      <div class="col-md-6">
        <img src="../img/logo.jpg" alt="Logo del la empresa" height="100" width="200">
      </div>
      <div class="col-md-6">
        <h2 id="titulo">Crear Terapeuta</h2>
      </div>
    </div>
  </div>
  <div class="form-group">
  <form action="conexionCrearTerapeuta.php" method="post">
    <label>Nombre(s)</label>
    <input type="text" class="form-control"  placeholder="&#128697; Nombre(s)" required name="nombre">
    <label>Apellido(s)</label>
    <input type="text" class="form-control"  placeholder="&#128697; Apellido(s)" required name="apellido">
    <label>Sexo:</label>
      <div class="radio">
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios1" value="hombre" checked>
            Hombre
        </label>
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios1" value="mujer">
            Mujer
        </label>
      </div>
    <label>Telefono:</label>
    <input type="telephone" class="form-control"  placeholder="&#128697; Telefono" required name="telefono">
    <label>Email</label>
    <input type="email" class="form-control"  placeholder="&#128697; Email" required name="email">
    <br>
    <div class="form-group">
      <button type="submit" class="btn btn-primary btn-lg btn-block">Registrar</button>
    </div>
    </form>
  </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
 