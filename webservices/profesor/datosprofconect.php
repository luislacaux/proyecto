<?php
include ("../mysql.php");
session_start();

obtenerdato();


function obtenerdato(){
    $db = conectarDB();
    $rut = $_SESSION["rut"];
    $query = "select nombre from profesor where rut='$rut'";
    $resQuery = mysql_query($query,$db) or die(mysql_error());
    $row = mysql_fetch_row($resQuery);
    
    $line = (string)$row[0];
    $jsondata['nombre'] = $line;
    echo json_encode($jsondata);
    
    
    
    
}

?>
