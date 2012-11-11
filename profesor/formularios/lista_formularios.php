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
      .formatoTabla {width: 625px;background-color: white;}
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements 
          - updated in Bootstrap 2.02 to include the http: -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <!--<link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">-->
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

    <center><legend>Lista de formularios existentes</legend></center>

    <div id="container">
        <form id="f" name="f">
            <center><table id="tablaFormularios" class="table table-bordered formatoTabla" >
                <tr>
                    <th ><center>ID</center></th>
                    <th ><center>Nombre del formulario</center></th>
                    <th><center>Autor/a</center></th>
                    <th ><center>Fecha de creacion</center></th>
                    <th></th>
                </tr>
            </table></center>
        </form>
    </div>
    

    
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="../js/jquery-1.7.1.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap-dropdown.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/bootstrap.js"></script>
  <script type="text/javascript" src="../js/formularios.js"></script> 

  <script type="text/javascript">

    function nuevaFila(id,nomform,autor,fecha){
      $("#tablaFormularios").append("</center><tr>"+
        "<td><center>"+id+"</td>"+
        "<td><center>"+nomform+"</center></td>"+
        "<td><center>"+autor+"</center></td>"+
        "<td><center>"+fecha+"</center></td>"+
        "<td><center><input type='submit' value='Ver' class='btn btn-success eliminar'></center></td>"+
        "</tr>")
    }
    var forms = getformularios();
    var arr = forms.split("$");
    
    var arrID = arr[0].split(",");
    var arrNom = arr[1].split(",");
    var arrAutor = arr[2].split(",");
    var arrFecha = arr[3].split(",");
    
   /* var arrID = ['1','2','3','4','5','6','7','8'];
    var arrNom = ['Fomrulario pichicun','Formulario hola-chau','Quimica Interesaante','Formulario corta head','Formu inventao','masclo','me','aburri'];
    var arrAutor = ['Patricio Ruiz-Tagle','Luz Alegria','Patricio Ruiz-Tagle','Patricio Ruiz-Tagle','Luz Alegria','Luz Alegria','Patricio Ruiz-Tagle','Luz Alegria'];
    var arrFecha = ['13/04/1999','23/06/1999','13/04/2000','23/06/2000','13/04/2001','23/06/2001','13/04/2002','23/06/2002'];*/

    function obtenerForm(){
         for (i=0;i<arrID.length;i++){
            nuevaFila(arrID[i],arrNom[i],arrAutor[i],arrFecha[i]);

         }
    }
   $(document).ready(obtenerForm());

  

    </script>

  </body>
</html>
