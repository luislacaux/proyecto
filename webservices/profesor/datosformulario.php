<?php

include ("../mysql.php");

datosformulario();

function datosformulario(){
    $db=conectarDB();
    $query = "SELECT nombre FROM formulario";
    $query2 = "SELECT count(*) FROM formulario";
    $resQuery = mysql_query($query,$db) or die(mysql_error());
    $resQuery2 = mysql_query($query2,$db) or die(mysql_error());
    $row2 = mysql_fetch_row($resQuery2);
    
    //row es ele arreglo con los nombres
    $string = $row2[0];
    for ($i=0;$i<$row2[0];$i++){
        $filas = mysql_fetch_row($resQuery);
        $string = $string.",".$filas[0];
    }
   
   $jsondata['datos'] = $string;
    echo json_encode($jsondata);
}
?>
