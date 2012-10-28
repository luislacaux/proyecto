<?php
include ("mysql.php");
include ("./webservices/validarusuarios.php");

//Inicio la sesion 
session_start();
$validarUsuario = validarUsuario($_POST["usuario"],$_POST["contrasena"]);
if ($validarUsuario == 1){
    $_SESSION["autenticado"]= "SI";
    header ("Location: profesor/index.html");
}else {
    header ("Location: index.php");
   
}
?>