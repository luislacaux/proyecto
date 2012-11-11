<?php
//require("../../webservices/securityprof.php");
//session_start();

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
    <script type="text/javascript" src="laboratorios.js"></script> 
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
        background: #C7EEBB; 
      }
      .celdaTabla {width: 400px; height: 10px; background-color: white;
                    }
      .comboBoxs {width: 60px}
      .textFields {width: 80px}
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
                <a href="../index.php">Salir</a>
              </li>           
            </ul>
           <!--/  <a class="btn btn-primary pull-right" href="http://twitter.github.com/bootstrap/">Twitter Bootstrap Home</a>-->
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
        
        <center>
                <table id="tabla_new_lab" class="table table-bordered celdaTabla">
                  <tr>
                  <th><center>Semestre:  </center></th>
                  <td><center><select id="semestre" class="comboBoxs">
                        <option>1</option>
                        <option>2</option>
                      </select></center></td>
                </tr>
                <tr>
                  <th><center>Periodo:  </center></th>
                  <td><center><select id="periodo" class="comboBoxs">
                        <option val="1">I</option>
                        <option val="2">II</option>
                        <option val="3">III</option>
                        <option val="4">IV</option>
                        <option val="5">V</option>
                        <option val="6">VI</option>
                        <option val="7">VII</option>
                      </select></center></td>
                </tr>
                <tr>
                  <th><center>Grupo paralelo:  </center></th>
                  <td><center><select id="grupo_par" class="comboBoxs">
                        <option val="1">1</option>
                        <option val="2">2</option>
                        <option val="3">3</option>
                        <option val="4">4</option>
                        <option val="5">5</option>
                        <option val="6">6</option>
                        <option val="7">7</option>
                        <option val="8">8</option>
                        <option val="9">9</option>
                        <option val="10">10</option>
                      </select></center></td>
                </tr>
                <tr>
                  <th><center>Limite por grupo:  </center></th>
                  <td><center><input id="limite" type='text' class="textFields" ></center></td>
                </tr>
                <tr>
                  <th><center>ID formulario:  </center></th>
                  <td><center><select id="nombreform" name="nombreform" type='text' class="textFields"  onfocus="javascript:_onpressed(this);">
                  <option value="">Elija</option>
                  </select></center></td>
                </tr>
                </table> 
                </center>
          
        
    </div>
    <div>
      <center><input type="submit" id="crear_lab" class="btn btn-success" value="Crear Laboratorio" /></center></div>
    
    <script>
     $(document).ready(function(){
     $("#").click(function(event){
       
     //  _onpressed(this)
   //});
 //});
    </script>

      

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="../js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap-dropdown.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.js"></script>

  </body>
</html>
