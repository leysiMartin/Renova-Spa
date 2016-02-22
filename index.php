<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="css/styles.css" rel="stylesheet">
  </head>
  <body>
<!--login modal-->
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
        <div class="row">
          <div class="col-md-6">
            <img src="img/logo.jpg" alt="" height="100" width="200">
          </div>
          <div class="col-md-6">
             <h2 class="text-center">Login</h2>
          </div>
        </div>
      </div>
      <div class="modal-body">
          <form class="form col-md-12 center-block" action="php/conexionLogin.php" method="post">
            <div class="form-group">
              <input type="email" class="form-control input-lg" placeholder="&#64; Email" name="usuario">
            </div>
            <div class="form-group">
              <input type="password" class="form-control input-lg" placeholder="&#128272; Password" name="password">
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block">Entrar</button>
            </div>
          </form>
      </div>
      <div class="modal-footer">
        <div class="col-md-12">
          
        </div>  
      </div>
  </div>
  </div>
</div>
  <!-- script references -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>