<?php
session_start();
session_destroy();
 $var = "llave_quimica";
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Autenticación</title>
    <script type="text/javascript" src="profesor/js/jquery-1.7.1.min.js"></script>
     <script src="profesor/js/bootstrap.min.js"></script>
    <script src="profesor/js/bootstrap.js"></script>
    <script type="text/javascript" src="JSON.js"></script> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="profesor/css/bootstrap.css" rel="stylesheet">
    <link href="profesor/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="profesor/js/prettify/prettify.css" rel="stylesheet">
    <script>
       $(document).ready(function(){
       $("#boton").click(function(event){
           //EAS_ENCRYPT('',$var.val());
           validaruser( $("#rut").val()+" "+$("#contrasena").val() )
   });
 });
    
       
 </script>
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
      }
    </style>


  </head>

  <body>
      <center>
<h1>Laboratorios de quimica</h1> 
<br><br>

<p>

<h4>Ingrese su Rut y contraseña</h4>
<p>

</center>

<table class ="init" border="0" align="center">
<tr><td>Rut:</td><td><input id="rut" size="20" value="" type="text"/></td></tr>
<tr><td>Contraseña:</td><td><input id="contrasena" size="20" type="password"/></td></tr>
<tr><td><td><input type="button" id="boton" value="Iniciar Sesión" /></td></tr>
</table>


    
      


     <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    

  </body>
</html>
