<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Autenticación</title>
    <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>

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
      <center>
<h1 class="inicio">Laboratorios de quimica</h1> 
<br><br>
<?if (isset($_GET["errorusuario"]) && $_GET["errorusuario"]=="si"){?>
<h4 class="error">Por favor ingrese los datos correctamente</h4>
<p>
<?}else{?>
<h4 class="ingrese">Ingrese su Rut y contraseña</h4>
<p>
<?}?>
</center>
<form action="selector.php" method="POST">
<table class ="init" border="0" align="center">
<tr><td class="rut">Rut:</td><td><input name="usuario" size="25" value=""/></td></tr>
<tr><td class="contrasena">Contraseña:</td><td><input name="contrasena" size="25" type="password"/></td></tr>
<tr><td/><td><input class="button" type="submit" value="Iniciar Sesión" /></td></tr>
</table>
</form>

    
      


     <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    

  </body>
</html>
