<?php
require("../../webservices/securityprof.php");
session_start();

?>
<!doctype html> <!-- decirle al navegador que lo q viene es un documento html
y por si usas html5 en tu doc -->
<html>
<head>
<meta charset="utf-8"/>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--<script src="http://code.jquery.com/jquery-latest.js"></script>-->

<script type="text/javascript" src="../js/jquery-1.7.1.min.js"></script>
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
                  <li class="dropdown">  
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Laboratorios
                      <b class="caret"></b>  
                    </a>  
                    <ul class="dropdown-menu"> 
                          <li><a href="grupo/grupo.html">Crear grupo</a></li>  
                          <li><a href="laboratorio/laboratorio.html">Responder laboratorio</a></li>  
                    </ul>  
                  </li> 
               </ul>
               <ul class="nav">
                  <li class="dropdown">  
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ver resumen<b class="caret"></b>  
                    </a>  
                    <ul class="dropdown-menu"> 
                          <li><a href="formularios/crear_formulario.html">Laboratorios realizados</a></li>   
                    </ul>  
                  </li> 
               </ul>            
              <li>
                <a href="login.html">Salir</a>
              </li>           
            </ul>

           <!--/  <a class="btn btn-primary pull-right" href="http://twitter.github.com/bootstrap/">Twitter Bootstrap Home</a>-->
          <!--</div><!--/.nav-collapse-->
        </div>
      </div>
    </div>

<div class="container-fluid">
  <h5>Agregue estudiantes a su grupos</h5>
  <form class="form-horizontal">
      <div id="div1" class="control-group">
          <input class="span2" type="text" placeholder="RUT">
          <a class="btn" id="mas1" href="#">
              <i class="icon-plus"></i>
          </a>
      </div>
      <div id="div2" class="control-group">
          <input class="span2" type="text" placeholder="RUT">
          <a>
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
      <div class="control-group">
          <button id="finalizar" type="submit" class="btn">Finalizar</button>
      </div>
    </div>
</form>



</body>
</html>