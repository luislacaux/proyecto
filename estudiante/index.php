<!doctype html> <!-- decirle al navegador que lo q viene es un documento html
y por si usas html5 en tu doc -->
<html>
<head>
<meta charset="utf-8"/>

<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap-dropdown.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="script/index.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap-responsive.css" rel="stylesheet">

<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">

<link href="js/prettify/prettify.css" rel="stylesheet">

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
                <li>
                  <a href="index.php">Inicio</a>
                </li>
                  <li class="dropdown">  
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Laboratorios
                      <b class="caret"></b>  
                    </a>  
                    <ul class="dropdown-menu"> 
                          <li><a href="grupo/grupo.php">Crear grupo</a></li>  
                          <li><a href="laboratorios/responder.php">Responder laboratorio</a></li>  
                    </ul>  
                  </li> 
               </ul>
               <ul class="nav">
                  <li class="dropdown">  
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ver resumen<b class="caret"></b>  
                    </a>  
                    <ul class="dropdown-menu"> 
                          <li><a href="verResumen/resumen.php">Laboratorios realizados</a></li>   
                    </ul>  
                  </li> 
               </ul>            
              <li>
                <a href="login.php">Salir</a>
              </li>           
            </ul>

<div class="container-fluid">

      <div class="row-fluid">
        <div class="span12">
          
        </div>
      </div><!-- end row 1 -->

    </div> <!-- /container -->
</body>



</html>