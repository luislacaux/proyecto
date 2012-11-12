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
        background: #C7EEBB; 
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
                <a href="../../index.php">Salir</a>
              </li>           
            </ul>
           <!--/  <a class="btn btn-primary pull-right" href="http://twitter.github.com/bootstrap/">Twitter Bootstrap Home</a>-->
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <table class ="init" border="0" align="center">
        <tr>
          <td><b>Rut:</b></td><td><input id="nuevo_rut" size="20" value="" type="text"/></td>
        </tr>
        <tr>
          <td><b>Nombre completo:</b></td><td><input id="nuevo_nombre" size="30" value="" type="text"/></td>
        </tr>
        <tr>
          <td><b>Contraseña:</b></td><td><input id="nueva_pass" size="20" type="password"/></td>
        </tr>
        <tr><td><td><input type="submit" class="btn btn-success" id="agregar_profesor" value="Agregar profesor" /></td></tr>
      </table>
    </div> <!-- /container -->
    

  </body>

  <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap-dropdown.js"></script>
  <script type="text/javascript" src="agregaProfe.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap.js"></script>

  <script type="text/javascript">


    function agregar_profesor(){

      if( ($("#nuevo_rut").val().length < 1) || 
        ($("#nuevo_nombre").val().length < 1) || 
        ($("#nueva_pass").val().length < 1)){
        alert("Complete todos los campos e intente de nuevo.");
      }else{
        var datos = $("#nuevo_rut").val()+"," + $("#nuevo_nombre").val()+"," +  $("nueva_pass").val();
        agregaProfesor(datos);
        alert("Un nuevo profesor ha sido agregado exitosamente.");
        $("#nuevo_rut").val("");
        $("#nuevo_nombre").val("");
        $("#nueva_pass").val("");
      }
    }

    
    
    $("#agregar_profesor").on("click",agregar_profesor)
  
  </script>

</html>