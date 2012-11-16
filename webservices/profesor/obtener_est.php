<?php
include("../mysql.php");
  $gr = $_POST['grupo'];
  $grp = (int) $gr; 
  obtieneLabs($grp);
 
function obtieneLabs($grp) {
   $db = conectarDB();
   
   $query = "SELECT nombre,rut FROM estudiante WHERE grupo_paralelo ='$grp'";
  
   $resQuery = mysql_query($query,$db) or die(mysql_error());
   $row  = mysql_fetch_row($resQuery);
  

   $stringNombre = (string)$row[0];
   $stringRut = $row[1];
 
  while($row = mysql_fetch_row($resQuery)){
      $stringNombre = (string)($stringNombre.",".$row[0]);
      $stringRut = $stringRut.",".$row[1];
     
   }

   $jsondata['nombre'] = $stringNombre;
   $jsondata['rut'] = $stringRut;
 
   echo json_encode($jsondata);
   mysql_close($db);
 }
?>
