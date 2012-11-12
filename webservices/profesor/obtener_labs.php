<?php
include("../mysql.php");
  obtieneLabs();
 
function obtieneLabs() {
   $db = conectarDB();
   
     
   $query = "SELECT YEAR(fecha),semestre FROM laboratorio";
   $query2 = "SELECT count(*) FROM laboratorio";
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

   $jsondata['fecha'] = $string;
   $jsondata['semestre'] = $string2;
 
   echo json_encode($jsondata);
   mysql_close($db);
 }
?>
