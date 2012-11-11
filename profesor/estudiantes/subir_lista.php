<?php
require("../../webservices/securityprof.php");
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

    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/bootstrap-responsive.css" rel="stylesheet">
    <link href="../js/prettify/prettify.css" rel="stylesheet">


    <!-- Le styles -->
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
        background: #C7EEBB; 
      }
      .formatcell {width: 380px;}
      .anio {width: 80px;}
      .sems {width: 60px;}
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
                <a href="../index.php">Inicio</a>
              </li>
              <ul class="nav">
                  <li class="dropdown">  
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Laboratorios
                      <b class="caret"></b>  
                    </a>  
                    <ul class="dropdown-menu"> 
                          <li><a href="../laboratorios/crear_lab.php">Nuevo laboratorio</a></li>  
                          <li><a href="../laboratorios/labs_realizados.php">Laboratorios realizados</a></li>  
                    </ul>  
                  </li> 
               </ul>
               <ul class="nav">
                  <li class="dropdown">  
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Formulario
                      <b class="caret"></b>  
                    </a>  
                    <ul class="dropdown-menu"> 
                          <li><a href="../formularios/crear_formulario.php">Crear formulario</a></li>  
                          <li><a href="../formularios/lista_formularios.php">Ver lista de formularios</a></li>  
                    </ul>  
                  </li> 
               </ul>          
               <ul class="nav">
                  <li class="dropdown">  
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Estudiantes
                      <b class="caret"></b>  
                    </a>  
                    <ul class="dropdown-menu"> 
                          <li><a href="../estudiantes/subir_lista.php">Subir lista estudiantes</a></li>  
                          <li><a href="../estudiantes/resumen.php">Ver resumen</a></li>  
                    </ul>  
                  </li> 
               </ul>
              <ul class="nav">
                  <li class="dropdown">  
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Estadísticas
                      <b class="caret"></b>  
                    </a>  
                    <ul class="dropdown-menu"> 
                          <li><a href="../estadisticas/estadisticas_notas.php">De notas</a></li>  
                          <li><a href="../estadisticas/estadisticas_asistencia.php">De asistencia</a></li>  
                          <li><a href="../estadisticas/estadisticas_errores.php">De errores</a></li> 
                    </ul>  
                  </li> 
               </ul>         
              <li>
                <li>
                <a href="../agregar_profesor/nuevo_profesor.php">Agregar profesor</a>
              </li>    
              <li>
                <li>
                <a href="../datos/mis_datos.php">Mis datos</a>
              </li>    
              <li>
                <a href="login.php">Salir</a>
              </li>           
            </ul>
           <!--/  <a class="btn btn-primary pull-right" href="http://twitter.github.com/bootstrap/">Twitter Bootstrap Home</a>-->
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">

      <div class="row-fluid">
        
        <div>
            <center><select class="anio">Año:
              <option>2012</option>
              <option>2013</option>
            </select>
          
            <select class="sems">
              <option>1</option>
              <option>2</option>
            </select>   </center>           
        </div>

        <br>
        <br>
        <div class="container-fluid">
        
        <center>
                
              <div id="primer_div" >
                  <form action="../../webservices/profesor/subir_estudiantes.php" method="post" enctype="multipart/form-data">  
                <center><br>Seleccione el arhivo .CSV desde su máquina<br><br><input name="userfile" type="file" id="btn_elegir" class="btn btn-success" value="Elegir archivo" onclick="toggle_doble('primer_div','segundo_div')") /></center>
              </div>
              <div id="segundo_div" >
                  <center><br>Por favor, confirme el archivo a subir<br><br><input type="submit" id="guardar" class="btn btn-success" value="Re-elegir archivo" onclick="toggle_doble('segundo_div','primer_div')")/>  <input type="submit" id="btn_confirmar" class="btn btn-success" value="Confirmar y subir" onclick="toggle_doble('segundo_div','tercer_div')"/></form></center>
              </div>
              <div id="tercer_div">
                <br><center><input type="submit" id="btn_ver_lista" class="btn btn-success" value="Ver lista de estudiantes" />
              </center>
              </div>
                
          </center>

      </div><!-- end row 1 -->


      


    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script type="text/javascript" src="../js/jquery-1.7.1.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap-dropdown.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/bootstrap.js"></script>
  <script type="text/javascript">

        
       $(document).ready(function(){document.getElementById('segundo_div').style.display = 'none'} );
         $(document).ready(function(){  document.getElementById('tercer_div').style.display = 'none'} );

       
       
      

      function toggle_doble(id,id2){
         var ee = document.getElementById(id);
         var e = document.getElementById(id2);
         if(e.style.display == 'block'){
            e.style.display = 'none';
            ee.style.display = 'block';
          }
         else{
            e.style.display = 'block'
            ee.style.display = 'none';
          }
      }
           
     </script>

  </body>
</html>
