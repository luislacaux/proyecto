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
               $var = mysql_query("select tipo_rut('$rut')",$db);
               $row = mysql_fetch_row($var);
               if($row[0] == "PROFESOR"){
                     $jsondata['tipo']="PROFESOR";
                     $jsondata['rut'] = $row[0];
                     $jsondata['contrasena'] = $row->contrasena;
                     $jsondata['rut_ingresado'] = $rut;
                      echo json_encode($jsondata);
                   
                   
               }else{
                   if($row[0]=="ESTUDIANTE"){
                       $jsondata['tipo']="ESTUDIANTE";
                       $jsondata['rut'] = $row[0];
                       echo json_encode($jsondata);
                       
                   }
                   
               }
              // $query = "select rut from estudiante where rut ='$rut'";
	      // $resQuery = mysql_query($query,$db) or die(mysql_error());
               
             
   
		
	}

 




/*if ($validarUsuario == 1){
    $_SESSION["autenticado"]= "SI";
    header ("Location: ../profesor/index.html");
}else {
    header ("Location: ../index.html");
   
}*/
?>