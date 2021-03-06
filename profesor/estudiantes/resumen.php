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
     <script type="text/javascript" src="../js/obtieneEst.js"></script>

    <!-- Le styles -->
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
        background: #C7EEBB; 
      }
      .formatoTabla{width: 500px; background-color: white;}
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
                <a href="../../index.php">Salir</a>
              </li>           
            </ul>
           <!--/  <a class="btn btn-primary pull-right" href="http://twitter.github.com/bootstrap/">Twitter Bootstrap Home</a>-->
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div id="container">
      <center>
        <select id="select_grupo" class="comboBoxs" onfocus="javascript:_onpressed(this);">
            <option val="0"><center>Seleccione grupo</center></option>
        </select>
          <select id="select_lab" class="comboBoxs">
            <option val="0"><center>Seleccione Laboratorio</center></option>
            <option val="1"><center>1</center></option>
            <option val="2"><center>2</center></option>
            <option val="3"><center>3</center></option>
            <option val="4"><center>4</center></option>
          </select>
        <input type='submit' id="ver_estudiantes" value='Ver estudiantes' class='btn btn-success' onClick="javascript: get_grupo();">
      </center>
    </div>

    <div id="container">
        <form id="f" name="f">
            <center><table id="tablaEstudiantes" class="table table-bordered formatoTabla" >
                <tr>
                    <th ><center>RUT</center></th>
                    <th ><center>Nombre</center></th>
                    <th><center>Asistencia</center></th>
                </tr>
            </table></center>
        </form>
    </div>


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="../js/jquery-1.7.1.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap-dropdown.js"></script>
  <script type="text/javascript" src="../js/obtieneEst.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/bootstrap.js"></script>

  <script type="text/javascript">
    var item_sel = $('#select_grupo option:selected').val();
    var lab = $('#select_lab option:selected').val();
   var string = "";
    var n_fila = 0;
var infor = new Array();
    function nuevaFila(rut,nombre,grupo,labo){
      if (rut== 0){
        alert("Seleccione un grupo por favor.");
      }else{
        //string = rut+","+item_sel+","+lab;
        
        infor = [rut,grupo,labo];
        $("#tablaEstudiantes").append("</center><tr id='fila_"+n_fila+"'>"+
        "<td><center>"+rut+"</td>"+
        "<td><center>"+nombre+"</center></td>"+
        "<td><center><input id='elemento"+n_fila+"'"+" name='elemento' type='checkbox' value='1' onClick='javascript: set_Asi("+infor+");'/></center></td>"+
        "</tr>")
     
      }
      
    }
    
    /*var arrRut = ['1','2','3','4','5','6','7','8'];
    var arrNom = ['a','b','c','d','e','f','g','h'];*/
   
function set_Asi(dato1){
console.log(dato1[0]);


}
    function obtenerForm(grupo,arrRut,arrNom,labo){
      if (n_fila > 0){
        for (k=0;k<=n_fila;k++){
          $("#fila_" + k).remove();
        }

        n_fila=0;

      }

      if (grupo == 'Seleccione grupo'){
        nuevaFila(0,0);
      }

      else{
        for (i=0;i<arrRut.length;i++){

            n_fila = n_fila + 1;
            nuevaFila(arrRut[i],arrNom[i],grupo,labo);

         }
      }
         
    }

    function get_grupo(){
      lab = $('#select_lab option:selected').val();
      item_sel = $('#select_grupo option:selected').val();
      var est = getEstudiantes(item_sel);
      var arr = est.split("$");
      var arrRut= arr[0].split(",");
      var arrNom=arr[1].split(",");
      
      obtenerForm(item_sel,arrRut,arrNom,lab);

    }

    
    
    $("#ver_estudiantes").on("click",get_grupo)
  

  

    </script>
   

  </body>
</html>