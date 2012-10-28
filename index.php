<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />  
<html>
<head>
<title>Autenticación</title>
<link rel="stylesheet" type="text/css" href="style.css" />
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
</body>
</html>