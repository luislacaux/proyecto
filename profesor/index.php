<?php
require("../webservices/securityprof.php");
session_start();

?>
<!DOCTYPE html>
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
      .anio {width: 80px;}
      .sems {width: 60px;}
      .botonfecha {height: 30px;
                   width:   300px;}
      .boton_crear_lab {height: 80px;
                        width: 80px;}
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
                <a href="index.html">Inicio</a>
              </li>
              <ul class="nav">
                  <li class="dropdown">  
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Laboratorios
                      <b class="caret"></b>  
                    </a>  
                    <ul class="dropdown-menu"> 
                          <li><a href="laboratorios/crear_lab.php">Nuevo laboratorio</a></li>  
                          <li><a href="laboratorios/labs_realizados.php">Laboratorios realizados</a></li>  
                    </ul>  
                  </li> 
               </ul>
               <ul class="nav">
                  <li class="dropdown">  
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Formulario
                      <b class="caret"></b>  
                    </a>  
                    <ul class="dropdown-menu"> 
                          <li><a href="formularios/crear_formulario.php">Crear formulario</a></li>  
                          <li><a href="formularios/lista_formularios.php">Ver lista de formularios</a></li>  
                    </ul>  
                  </li> 
               </ul>          
               <ul class="nav">
                  <li class="dropdown">  
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Estudiantes
                      <b class="caret"></b>  
                    </a>  
                    <ul class="dropdown-menu"> 
                          <li><a href="estudiantes/subir_lista.php">Subir lista estudiantes</a></li>  
                          <li><a href="estudiantes/resumen.php">Ver resumen</a></li>  
                    </ul>  
                  </li> 
               </ul>
              <ul class="nav">
                  <li class="dropdown">  
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Estadísticas
                      <b class="caret"></b>  
                    </a>  
                    <ul class="dropdown-menu"> 
                          <li><a href="estadisticas/estadisticas_notas.php">De notas</a></li>  
                          <li><a href="estadisticas/estadisticas_asistencia.php">De asistencia</a></li>  
                          <li><a href="estadisticas/estadisticas_errores.php">De errores</a></li> 
                    </ul>  
                  </li> 
               </ul>         
              <li>
                <li>
                <a href="agregar_profesor/nuevo_profesor.php">Agregar profesor</a>
              </li>    
              <li>
                <li>
                <a href="datos/mis_datos.php">Mis datos</a>
              </li>    
              <li>
                <a href="../index.php">Salir</a>
              </li>           
            </ul>
           <!--/  <a class="btn btn-primary pull-right" href="http://twitter.github.com/bootstrap/">Twitter Bootstrap Home</a>-->
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
          
          <b>Nombre:</b> <label id="nombre_profesor"></label>
          <b>Correo:</b> <label id="mail_profesor"></label>
          <br>
          <center>
            <legend><u>Laboratorios realizados en el semestre: </u>
              <br>
              <div class="container-fluid ">
                <select class="anio">Año:
                  <option>2012</option>
                  <option>2013</option>
                </select>
                
              
                <select class="sems">
                  <option>1</option>
                  <option>2</option>
                </select>
                <br>
                     <input type="submit" id="anio_sems" class="btn btn-success botonfecha" value="Elegir fecha" />


              </div>
              <br>
           </div>
            </legend>
          </center>

          <div class="row-fluid">
            <center><div class="span4"><b><u>Laboratorio 1: </u></b></div></center>
            <center><div class="span4"><b><u>Promedio notas: </u></b></div></center>
            <center><div class="span4"><b><u>Promedio error: </u></b></div></center>
          </div>
          <center><hr width="80%"></center>
          <div class="row-fluid">
            <center><div class="span4"><b><u>Laboratorio 2: </u></b></div></center>
            <center><div class="span4"><b><u>Promedio notas: </u></b></div></center>
            <center><div class="span4"><b><u>Promedio error: </u></b></div></center>
          </div>
          <center><hr width="80%"></center>
          <div class="row-fluid">
            <center><div class="span4"><b><u>Laboratorio 3: </u></b></div></center>
            <center><div class="span4"><b><u>Promedio notas: </u></b></div></center>
            <center><div class="span4"><b><u>Promedio error: </u></b></div></center>
          </div>
          <center><hr width="80%"></center>
          <br>
          <center><input type="submit" id="btn_crear_lab" onclick="ir_a_crear_lab()" class="btn btn-success boton_crear_lab" value="Crear laboratorio" /></center>
  

    </div> <!-- /container -->
    

  </body>

  <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap-dropdown.js"></script>  
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script type="text/javascript">
    function ir_a_crear_lab()
    {
    parent.location="laboratorios/crear_lab.html"
    }
  </script>
  <head>
  

</html>
