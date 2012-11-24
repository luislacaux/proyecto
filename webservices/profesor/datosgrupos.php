<?php

include ("../mysql.php");

datosgrupo();

function datosgrupo(){
    $db=conectarDB();
    $query = "SELECT DISTINCT grupo_paralelo FROM estudiante";
   
    $resQuery = mysql_query($query,$db) or die(mysql_error()); 
    
    
    
    $i=0;
    while($filas = mysql_fetch_array($resQuery,MYSQL_ASSOC)){
         $string[$i] = $filas['grupo_paralelo'];
         $i++;
    }
   $jsondata['datos'] = $string;
   echo json_encode($jsondata);
}
?>
