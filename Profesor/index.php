<!DOCTYPE html>
<?php
session_start();
require ("../security.php");
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Formulario de Quimica</title>
    

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="js/prettify/prettify.css" rel="stylesheet">


    <!-- Le styles -->
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>

    
  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand">Laboratorio Química</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li>
                <a>Inicio</a>
              </li>
               <li>
                <a href="index_laboratorios.html">Laboratorios</a>
              </li>
               <li>
                <a href="index_formularios.html">Formularios</a>
              </li>      
               <ul class="nav">
                  <li class="dropdown">  
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Estudiantes
                      <b class="caret"></b>  
                    </a>  
                    <ul class="dropdown-menu"> 
                          <li><a href="index_lista.html">Subir lista estudiantes</a></li>  
                          <li><a href="index_lista.html">Ver resumen</a></li>  
                    </ul>  
                  </li> 
               </ul>
              <li>
                <a href="index_estadisticas.html">Estadísticas</a>
              </li>    
              <li>
                <li>
                <a href="index_estadisticas.html">Agregar profesor</a>
              </li>    
              <li>
                <li>
                <a href="index_estadisticas.html">Mis datos</a>
              </li>    
              <li>
                <a href="login.html">Salir</a>
              </li>           
            </ul>
           <!--/  <a class="btn btn-primary pull-right" href="http://twitter.github.com/bootstrap/">Twitter Bootstrap Home</a>-->
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">

      <div class="row-fluid">
        <div class="span12">
          <center>
            <img src="img/fotografia.jpg">
            <p>Patricio Ruiz-Tagle</p>
          </center>
        </div>
      </div><!-- end row 1 -->

    </div> <!-- /container -->
    

  </body>

  <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
  <script type="text/javascript" src="http://twitter.github.com/bootstrap/assets/js/bootstrap-dropdown.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap.js"></script>

</html>