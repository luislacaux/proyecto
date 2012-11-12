<?php
include("../mysql.php");
  $gr = $_GET['gr'];
  $grp = (int) $gr; 
  obtieneLabs($grp);
 
function obtieneLabs($grp) {
   $db = conectarDB();
   if (!$db) {
     die('Could not connect: ' . mysql_error());
    }
   if (!mysql_select_db('prueba')) {
     die('Could not select database: ' . mysql_error());
    }   
   $query = "SELECT nombre,rut FROM tabla_test WHERE grupo = ".$grp;
   $query2 = "SELECT count(*) FROM tabla_test WHERE grupo = ".$grp;
   $resQuery = mysql_query($query,$db) or die(mysql_error());
   $resQuery2 = mysql_query($query2,$db) or die(mysql_error());
  
   
   $row  = mysql_fetch_row($resQuery);
   $row2 = mysql_fetch_row($resQuery2);

   $string = $row[0];
   $string2 = $row[1];
   for ($i=1;$i<$row2[0];$i++){
   $filas = mysql_fetch_row($resQuery);
   $string = $string.",".$filas[0];
   $string2 = $string2.",".$filas[1];
   }

   $jsondata['nombre'] = $string;
   $jsondata['rut'] = $string2;
 
   echo json_encode($jsondata);
   mysql_close($db);
 }
?>
