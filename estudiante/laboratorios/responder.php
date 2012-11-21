<?php
require_once('../dbms/conexion.php');
require_once('../dbms/dbms_function.php');
require_once('../dbms/db_obtenerDatos.php');

$conexion = dbConectar($config_host_bd, $config_usuario_bd, $config_password_bd, $config_bd);
$_temarios = dbObtieneEnunciados($conexion);

?>

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
 <script type="text/javascript">
  function enviar_datos(){
		var nfilas = document.getElementById('numero_filas').value; //para obtener el valor de numero_filas
		var string ="";
		var accion="ingresar_respuestas";
		for (i=0; i<nfilas;i++){
		var resp = document.getElementById('resp_'+i).value;
		
			string =string+resp+"|";
		}
		$.post("responder_ajax.php",{respuestas:string,faccion:accion},function(data){
			//alert("datos enviados");
			$('#respuesta_exe').fadeIn('fast');
			$('#respuesta_exe').html(data);
			$('#respuesta_exe').animate({opacity: 1.0},3000).fadeOut('slow');
		});
		
  }
 
 </script>

<body>
<div id="respuesta_exe"></div>
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

          
        </div>
      </div>
    </div>




<div class="container-fluid">

 <table id="tablaRspLab" class="table tableclass">
    <tbody>
	<?
	$i = 0;
		foreach($_temarios as $tem){
			
	?>
      <tr>
        <td><span id="en_<?echo $i;?>"><?echo $tem["enunciados"];?></span></td>
        <td><input id="resp_<?echo $i;?>" type="text" placeholder="Respuesta"></td> <!-- buscar como validar sólo numeros -->
        <td><span id="uni_<?echo $i;?>"><?echo $tem["unidades"];?></span></td>
      </tr>
	  <?
	  $i++;
	  }
	  ?>
     <input id="numero_filas" name="numero_filas" value="<?echo $i;?>" type="hidden"/>
    </tbody>
  </table>
   <div class="control-group">
        <button id="enviar" onClick="enviar_datos()" class="btn">Enviar</button>
    </div>
</div>
</body>
</html>