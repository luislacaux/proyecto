<!doctype html> <!-- decirle al navegador que lo q viene es un documento html
y por si usas html5 en tu doc -->
<html>
<head>
<meta charset="utf-8"/>


<script type="text/javascript" src="../js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-dropdown.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.js"></script>
<script type="text/javascript" src="../script/index.js"></script>
<script type="text/javascript" src="../js/mostrar.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../css/bootstrap-responsive.css" rel="stylesheet">

<link href="../css/bootstrap.css" rel="stylesheet">
<link href="../css/bootstrap-responsive.css" rel="stylesheet">

<link href="../js/prettify/prettify.css" rel="stylesheet">

<style type="text/css">
  body{
    padding-top: 60px;
    padding-bottom: 40px;
  }
  .tableclass {width: 400px; height: 100px}
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
                          <li><a href="../grupo/grupo.php">Crear grupo</a></li>  
                          <li><a href="laboratorios/responder.php">Responder laboratorio</a></li>  
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
<!--<form class="form-horizontal">
    <div class="control-group">
     	<span>Enunciado 1</span>
     	<input id="resp" type="text" placeholder="Respuesta">
     	<span>Gramos</span>
    </div>
    <div class="control-group">
      <span>Enunciado 2</span>
      <input id="resp" type="text" placeholder="Respuesta">
      <span>Gramos</span>
    </div>
    <div class="control-group">
        <button id="enviar" type="submit" class="btn">Enviar</button>
    </div>
    </form>-->
 <table id="tablaRspLab" class="table tableclass">
    <tbody>
      <tr>
        <td><span id="en1">Enunciado 1</span></td>
        <td><input id="resp1" type="text" placeholder="Respuesta"></td>
        <td><span id="uni1">unidad</span></td>
      </tr>
      <tr>
        <td><span id="en2">Enunciado 2</span></td>
        <td><input id="resp2" type="text" placeholder="Respuesta"></td>
        <td><span id= "ini2">unidad</span></td>
      </tr>
      <tr>
        <td><span id="en3">Enunciado 3</span</td>
        <td><input id="resp3" type="text" placeholder="Respuesta"></td>
        <td><span id= "uni3">unidad</span></td>
      </tr>
      <tr>
        <td><span id="en4">Enunciado 4</span></td>
        <td><input id="resp4" type="text" placeholder="Respuesta"></td>
        <td><span id="uni4">unidad</span></td>
      </tr>
      <tr>
        <td><span id="en5">Enunciado 5</span></td>
        <td><input id="resp5" type="text" placeholder="Respuesta"></td>
        <td><span id="uni5">unidad</span></td>
      </tr>
     <!-- <tr>
        <td><span id="en6">Enunciado 6</span></td>
        <td><input id="resp6" type="text" placeholder="Respuesta"></td>
        <td><span id="uni6">unidad</span></td>
      </tr>
      <tr>
        <td><span id="en7">Enunciado 7</span></td>
        <td><input id="resp7" type="text" placeholder="Respuesta"></td>
        <td><span id="uni7">unidad</span></td>
      </tr>
      <tr>
        <td><span id="en8">Enunciado 8</span></td>
        <td><input id="resp8" type="text" placeholder="Respuesta"></td>
        <td><span id="uni8">unidad</span></td>
      </tr>
      <tr>
        <td><span id="en9">Enunciado 9</span></td>
        <td><input id="resp9" type="text" placeholder="Respuesta"></td>
        <td><span id="uni9">unidad</span></td>
      </tr>-->
    </tbody>
  </table>
   <div class="control-group">
        <button id="enviar" type="submit" class="btn">Enviar</button>
    </div>
</div>
</body>
</html>