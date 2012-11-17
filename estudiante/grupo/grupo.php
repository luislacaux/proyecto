<!doctype html> <!-- decirle al navegador que lo q viene es un documento html
y por si usas html5 en tu doc -->
<html>
<head>
<meta charset="utf-8"/>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--<script src="http://code.jquery.com/jquery-latest.js"></script>-->

<script type="text/javascript" src="../js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="../js/jquery.Rut.js"></script>
<script type="text/javascript" src="../js/bootstrap-dropdown.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.js"></script>
<script type="text/javascript" src="../script/index.js"></script>
<script type="text/javascript" src="../js/mostrar.js"></script>

<link href="../css/bootstrap-responsive.css" rel="stylesheet">

<link href="../css/bootstrap.css" rel="stylesheet">
<link href="../css/bootstrap-responsive.css" rel="stylesheet">

<link href="../js/prettify/prettify.css" rel="stylesheet">

<style type="text/css">
  body{
    padding-top: 60px;
    padding-bottom: 40px;
  }
  .tablaG {width: 300px; height: 100px}
</style>


<title>Química</title>

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
              <ul class="nav">
                <ul class="nav">
                  <li>
                    <a href="../index.php">Inicio</a>
                  </li>
                  <li class="dropdown">  
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Laboratorios
                      <b class="caret"></b>  
                    </a>  
                    <ul class="dropdown-menu"> 
                          <li><a href="grupo/grupo.php">Crear grupo</a></li>  
                          <li><a href="../laboratorios/responder.php">Responder laboratorio</a></li>  
                    </ul>  
                  </li> 
               </ul>
               <ul class="nav">
                  <li class="dropdown">  
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ver resumen<b class="caret"></b>  
                    </a>  
                    <ul class="dropdown-menu"> 
                          <li><a href="../verResumen/resumen.php">Laboratorios realizados</a></li>   
                    </ul>  
                  </li> 
               </ul>            
              <li>
                <a href="login.php">Salir</a>
              </li>           
            </ul>

           <!--/  <a class="btn btn-primary pull-right" href="http://twitter.github.com/bootstrap/">Twitter Bootstrap Home</a>-->
          <!--</div><!--/.nav-collapse-->
        </div>
      </div>
    </div>

<div class="container-fluid">
  <h5>Agregue estudiantes a su grupos</h5>
  
 
 <div id="container">
        <form id="f" name="f">
            <table id="tablaFormularios" class="table table-bordered celdaTabla" >
                <tr>
                    <!--<th >RUT Alumno</th>
                    <th >Agregar</th>-->
                </tr>
            </table>
        </form>
    </div>
    

    
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  <script type="text/javascript" src="../js/jquery-1.7.1.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap-dropdown.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/bootstrap.js"></script>

  <script type="text/javascript">

  // function nuevaFila(rut,boton){
    //  $("#tablaFormularios").append("<tr>"+
      //  "<td id="rut1" ><input class="span2" type="text" placeholder="RUT"></td>"+
       // "<td><a class="btn" id="mas1" href="#">
       //         <i class="icon-plus"></i>
       //     </a></td>"+
       // "</tr>")
    //}
    
   // var RUT = ['1','2','3','4','5'];
  //  var arrNom = ['Fomrulario pichicun','Formulario hola-chau'];
  //  var arrAutor = ['Patricio Ruiz-Tagle','Luz Alegria'];
  //  var arrFecha = ['13/04/1999','23/06/1999'];

  /*  function agregarInts(){
         for (i=0;i<RUT.length;i++){
              function nuevaFila(rut,boton){
             $("#tablaFormularios").append("<tr>"+
              "<td id="rut1" ><input class="span2" type="text" placeholder="RUT"></td>"+
              "<td><a class="btn" id="mas1" href="#">
                      <i class="icon-plus"></i>
                  </a></td>"+
              "</tr>")
    } 
         }
    }
   $(document).ready(agregarInts());

  
*/
    </script>
<!--
<table id="tabla_agregar" class="table tablaG">
 
    <tbody>
      <tr id="id1">
        <td><input class="span2" type="text" placeholder="RUT"></td>
        <td><a class="btn" id="mas1" href="#">
                <i class="icon-plus"></i>
            </a></td>
      </tr>
      <tr id="id2">
        <td><input class="span2" type="text" placeholder="RUT"></td>
        <td><a class="btn" id="mas2" href="#">
                <i class="icon-plus"></i>
            </a></td>
      </tr>
    </tbody>
  </table>-->
 
    <form class="form-horizontal">

        <div id="div1" class="control-group">
            <input class="span2" type="text" placeholder="RUT">
            <a class="btn" id="mas1" href="#">
                <i class="icon-plus"></i>
            </a>
        </div>
        <div id="div2" class="control-group">
            <input class="span2" type="text" placeholder="RUT">
           <a class="btn" id="mas2" href="#">
                <i class="icon-plus"></i>
            </a>
        </div>
        <div id="div3" class="control-group">
            <input class="span2" type="text" placeholder="RUT">
            <a class="btn" id="mas3" href="#">
                <i class="icon-plus"></i>
            </a>
        </div>

        <div id="div4" class="control-group">
            <input class="span2" type="text" placeholder="RUT">
            <a class="btn" id="mas4" href="#">
                <i class="icon-plus"></i>
            </a>
        </div>
        <div id="div5" class="control-group">
            <input class="span2" type="text" placeholder="RUT">
            <a class="btn" id="mas5" href="#">
                <i class="icon-plus"></i>
            </a>
        </div>
        <div id="btn1" class="control-group">
          <button id="finalizar" type="submit" class="btn">Finalizar</button>
      </div>
    </form>
</div>
</body>
