<?php

include ("../mysql.php");

datosformulario();

function datosformulario(){
    $db=conectarDB();
    $query = "SELECT nombre FROM formulario";
    $query2 = "SELECT count(*) FROM fromulario";
    $resQuery = mysql_query($query,$db) or die(mysql_error());
    $resQuery2 = mysql_query($query2,$db) or die(mysql_error());
    $row = mysql_fetch_row($resQuery);
    $row2 = mysql_fetch_row($resQuery2);
    
    $jsondata['cantidad'] = $row2[0];
    $jsondata['nombre'] = $row;
    echo json_encode($jsondata);
}
?>
