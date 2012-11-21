<?php
include("../mysql.php");
obtieneformulario();

function obtieneformulario(){
    //$db=conectarDB();
    $db = conectarDB();
   if (!$db) {
     die('Could not connect: ' . mysql_error());
    }
//  (nombre_de_la_BD)  
   if (!mysql_select_db('prueba')) {
     die('Could not select database: ' . mysql_error());
    }
    $query = "SELECT id,nombre,fecha FROM formulario";
    $query2 = "SELECT count(*) FROM formulario";
   // $query3 = "SELECT p.nombre FROM profesor p,formulario f WHERE p.id = f.id_profesor";
    $resQuery = mysql_query($query,$db) or die(mysql_error());
    $resQuery2 = mysql_query($query2,$db) or die(mysql_error());
   // $resQuery3 = mysql_query($query3,$db) or die(mysql_error());
    $row = mysql_fetch_row($resQuery);
    $row2 = mysql_fetch_row($resQuery2);
    //$row3 = mysql_fetch_row($resQuery3);
    
    //row es ele arreglo con los nombres
    $string = $row[0];
    $string2 = $row[1];
    //$string3 = $row3[0];
    $string4 = $row[2];
    for ($i=1;$i<$row2[0];$i++){
        $filas = mysql_fetch_row($resQuery);
        //$filas2 = mysql_fetch_row($resQuery3);
        $string = $string.",".$filas[0];
        $string2 = $string2.",".$filas[1];
        //$string3 = $string3.",".$filas2[0];
        $string4= $string4.",".$filas[2];
    }
   
   $jsondata['id'] = $string;
   $jsondata['nombre'] = $string2;
   $jsondata['profesor'] = "asd";
   $jsondata['fecha'] = $string4;
    echo json_encode($jsondata);
}
?>
