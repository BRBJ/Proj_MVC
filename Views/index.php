<!doctype html>
<html class="no-js" lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Project Renta de Vehiculos</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <nav class="navbar nav-principal navbar-fixed-top" role="navigation">


      <div class="container">
        <div class="navbar-header">

          <button class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
            <span class="icon-bar app-bar"></span>
            <span class="icon-bar app-bar"></span>
            <span class="icon-bar app-bar"></span>
          </button>
          <a class="navbar-brand link-personalizado" href="#">Proj Renta</a>
        </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right nav-1">
              <li><a href="php/vistaVehiculos.php">Vechículos
                <span class="glyphicon icon-automobile"></span></a></li>
              <li><a href="php/vistaDescuentos.php">Descuentos
                <span class="glyphicon icon-gift"></span></a></li>
              <li><a href="php/vistaPaquetes.php">Paquetes
                <span class="glyphicon icon-briefcase"></span></a></li>
              <li><a href="php/vistaContacto.php">Contactenos
                <span class="glyphicon icon-envelop"></span></a></li>
              <li><a href="#modelRegistro" data-toggle="modal">Registro
                <span class="glyphicon icon-user-plus"></span></a></li>
              <li><a href="#modelIngreso" data-toggle="modal">Ingresar
                <span class="glyphicon icon-users"></span></a></li>
            </ul>

          </div><!--/.navbar-collapse -->
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
      <section class="app-principal">
        <div class="container">
          <h1>Proj Renta</h1>
          <p>Renta de vehículos en linea</p>

          <!--Modal de Registro-->
          <div class="modal fade" id="modelRegistro">
            <form action="#" method="POST">
            <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header m">
                    <h4 class="modal-title">Formulario de Registro</h4>
                  </div>
                  <div class="modal-body m">
                    <form action="#" method="POST">
                      <div class="form-group">
                        <label for="nombre"></label>
                        <input type="text" name="nom" placeholder="Nombre">
                      </div>
                      <div class="form-group">
                        <label for="edad"></label>
                        <input type="text" name="edad" placeholder="Edad">
                      </div>
                      <div class="form-group">
                        <label for="telefono"></label>
                        <input type="text" name="tel" placeholder="Teléfono">
                      </div>
                      <div class="form-group">
                        <label for="correo"></label>
                        <input type="text" name="mail" placeholder="E-mail">
                      </div>
                      <div class="form-group">
                        <label for="nacionalidad"></label>
                        <input type="text" name="nacio" placeholder="Nacionalidad">
                      </div>
                      <div class="form-group">
                        <label for="pass"></label>
                        <input type="password" name="pass" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="con-pass"></label>
                        <input type="password" name="con-pass" placeholder="Confirm Password">
                      </div>
                  </div>
                  <div class="modal-footer m">
                    <input type="submit" class="btn btn-primary" value="Aceptar" name="acept">
                    <input type="submit" class="btn btn-default" value="Cancelar" name="cancel" data-dismiss="modal">
                  </div>
              </div>
            </div>
          </form>
          </div>
          <!--Modal de Ingreso-->
          <div class="modal fade" id="modelIngreso">
            <div class="modal-dialog">
              <div class="modal-content m">
                  <div class="modal-header">
                    <h4 class="modal-title">Ingresar</h4>
                  </div>
                  <div class="modal-body m">
                    <form action="#" method="POST">
                      <div class="form-group">
                        <label for="user"></label>
                        <input type="text" name="user" placeholder="E-Mail">
                      </div>
                      <div class="form-group">
                        <label for="pass"></label>
                        <input type="password" name="pass" placeholder="Password">
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer m">
                    <input type="text" class="btn btn-primary" value="Aceptar" name="acept1">
                    <input type="text" class="btn btn-default" value="Cancelar" name="cancel1" data-dismiss="modal">
                  </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <div class="carousel slide" id="miSlider" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#miSlider" data-slide-to="0" class="active"></li>
            <li data-target="#miSlider" data-slide-to="1"></li>
            <li data-target="#miSlider" data-slide-to="2"></li>
            <li data-target="#miSlider" data-slide-to="3"></li>
            <li data-target="#miSlider" data-slide-to="4"></li>
          </ol>
          <div class="carousel-inner">
            <div class="item active">
              <img src="img/img1.jpg" alt="Imagen1" class="img2">
            </div>
            <div class="item">
              <img src="img/img2.jpg" alt="Imagen2" class="img2">
            </div>
            <div class="item">
              <img src="img/img3.jpg" alt="Imagen3" class="img2">
            </div>
            <div class="item">
              <img src="img/img4.jpg" alt="Imagen4" class="img2">
            </div>
            <div class="item">
              <img src="img/img5.jpg" alt="Imagen5" class="img2">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4 justificado">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4 justificado">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4 justificado">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; BRBJ S.A. de C.V. 2015</p>
      </footer>


      <a href="#miSlider" class="carousel-control left" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a href="#miSlider" class="carousel-control right" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>



    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!--<script>
          (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>-->
    </body>
</html>
