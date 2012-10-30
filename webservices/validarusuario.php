<?php
include ("mysql.php");

//Inicio la sesion 
session_start();
$idi = $_POST['id'];
$id = (string) $idi; 
$idArray = explode(" ", $id);
validarUsuario($idArray);

function validarUsuario($idArray){
               $link = mysql_connect("localhost", "root", "taller");
               mysql_select_db("quimica");
               $rut = (string) $idArray[0];
		 $contrasena = (string) $idArray[1];
               $query = "select tipo_rut('$rut')";
               $result = mysql_query($query);
               $prof = "PROFESOR";
		 $est = "ESTUDIANTE";
               $line = mysql_fetch_row($result);
               $line2 = (string) $line[0];
              $jsondata['tipo']=$line2;
		echo json_encode($jsondata);
               /* if($line2 == $prof){
			// aquí se debe verificar la pass y el rut nuevamente.
			//$query2 = "select tipo_rut('$rut')";
                     //$result2 = mysql_query($query2);

                     $jsondata['tipo']="PROFESOR";
                     echo json_encode($jsondata);
                   	mysql_close($link);
                   
               }else{
                   if($line2 == $est){
                       $jsondata['tipo']="ESTUDIANTE";
                       echo json_encode($jsondata);
                       mysql_close($link);
                   }
		     $jsondata['tipo']="NO";
		     echo json_encode($jsondata);
                   mysql_close($link);
               }*/
                mysql_close($link);
                
		
	}


?>