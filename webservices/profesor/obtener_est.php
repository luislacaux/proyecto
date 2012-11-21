<?php
include("../mysql.php");
  $gr = $_POST['grupo'];
  $grp = (int) $gr; 
  obtieneLabs($grp);
 
function obtieneLabs($grp) {
   $db = conectarDB();
   
   $query = "SELECT rut,nombre FROM estudiante WHERE grupo_paralelo ='$grp'";
   
   $resQuery = mysql_query($query,$db) or die(mysql_error());
   //$row  = mysql_fetch_array($resQuery);
   
   //$stringRut = $row['rut'];
   // $stringNombre = $row['nom'];
   $i=0;
  while($row = mysql_fetch_array($resQuery,MYSQL_ASSOC)){
       $stringRut[$i] = $row['rut'];
       $stringNombre[$i] =$row['nombre'];
       $i++;   
      
   }
   $jsondata['nombre'] = $stringNombre;
   $jsondata['rut'] = $stringRut;
 
   echo json_encode($jsondata);
   mysql_close($db);
 }
 
 
?>
