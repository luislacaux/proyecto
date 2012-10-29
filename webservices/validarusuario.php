<?php
include ("mysql.php");

//Inicio la sesion 
session_start();
$idi = $_GET['id'];
$id = (string) $idi; 
$idArray = explode(" ", $id);
validarUsuario($idArray);

function validarUsuario($idArray){
               $db=conectarDB();
               $rut = (string) $idArray[0];
               $contrasena = (string) $idArray[1];
               $query = "select rut from estudiante where rut ='$rut'";
	       $resQuery = mysql_query($query,$db) or die(mysql_error());
               $row = mysql_fetch_row($resQuery);
               $jsondata['rut'] = $row[0];
               $jsondata['contrasena'] = $row->contrasena;
               $jsondata['rut_ingresado'] = $rut;
               echo json_encode($jsondata);
   
		
	}

 




/*if ($validarUsuario == 1){
    $_SESSION["autenticado"]= "SI";
    header ("Location: ../profesor/index.html");
}else {
    header ("Location: ../index.html");
   
}*/
?>