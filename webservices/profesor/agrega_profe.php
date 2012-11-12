<?php
include("../mysql.php");
 $data = $_GET['dp'];
 $datos = (string) $data; 
 $dpArray = explode(",", $datos);
 
process($dpArray);
 
 
function process($idArray) {
    $rut = (int) $idArray[0];
    $nombre = (string) $idArray[1];
    $pass = (string) $idArray[2];
//  (ip_del_pc_con_mysql, nombre_de_usuario_de_mysql , clave_mysql)
   $db = conectarDB();
   if (!$db) {
     die('Could not connect: ' . mysql_error());
    }
//  (nombre_de_la_BD)  
    
   $result = mysql_query("INSERT INTO profesor (rut,nombre, pass) VALUES ('$rut','$nombre','$pass')");
   if (!$result) {
     die('Could not query:' . mysql_error());
    }
 
  
   mysql_close($db);
 }
?>