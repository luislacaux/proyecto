
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
               $pass = "AES_ENCRYPT('contrasena','llave_quimica')";
               $query = "select tipo_rut('$rut')";
               $result = mysql_query($query);
               $prof = "PROFESOR";
	        $est = "ESTUDIANTE";
               $line = mysql_fetch_row($result);
               $line2 = (string) $line[0];
               
               if( strcmp($line2, $prof) ==0){
                   $_SESSION["autenticadoprof"] = "SI";
		     $_SESSION["rut"] = $rut;
	            //$query2 = "select acceso_profesor('$rut','$pass')";
		    //$result2 = mysql_query($query2);
		   // $line3 = mysql_fetch_array($result2);
                  //if((string)$line3[0] == "OK"){                       
                        $jsondata['tipo']="OK";
                        echo json_encode($jsondata);
                  //}elseif ((string)$line3[0] == 'NO'){
                        
                    //    $jsondata['tipo']="NO";
                       // echo json_encode($jsondata);
            
                    // }else{
			//	 $jsondata['tipo']="NOP";
                      //        echo json_encode($jsondata);
			//	}
                 
               }elseif(strcmp($line2, $est) ==0){
                       $_SESSION["autenticadoest"] = "SI";
                       $jsondata['tipo']=$line2;
                       echo json_encode($jsondata);
                       
               }elseif(strcmp($line2, "NO") ==0){
		     $jsondata['tipo']=$line2;
		     echo json_encode($jsondata);
                  
               }
                mysql_close($link);
                
		
	}


?>