<?php
include ("../mysql.php");
session_start();
$idi = $_GET['id'];
$id = (string) $idi; 
$idArray = explode(",", $id);
echo $idArray;
//crearformulario($idi);
function crearformulario($id){
    $db=conectarDB();
    $largo = strlen($id);
    echo $largo+"";
   for ( $i = 0 ; $i <= 10 ; $i ++){
    $query = "INSERT 
              INTO
              VALUE()";
    $resQuery = mysql_query($query,$db) or die(mysql_error());
    }
    //$row = mysql_fetch_row($resQuery);
    
    
    
    if(mysql_affected_rows()>0){
        $jsondata['respuesta'] = 1;
        echo json_encode($jsondata);
        echo "OK, Venta realizada exitosamente";
    }
    
    
    
    
}
?>
