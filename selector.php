<?php
include ("mysql.php");
include ("./webservices/validarusuarios.php");

//Inicio la sesion 
session_start();
$validarUsuario = 1;
if ($validarUsuario == 1){
    $_SESSION["autenticado"]= "SI";
    header ("Location: Profesor/index.html");
}else {

   
}
?>