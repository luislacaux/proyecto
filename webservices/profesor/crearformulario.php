<?php
include ("../mysql.php");
session_start();
$idi = $_POST['preguntas'];
$id = (string) $idi; 
$idArray = explode(",", $id);

crearformulario($idArray);



function crearformulario($id){
    $db=conectarDB();
    $largo = count($id)-1;
    $nom= (string) $id[0];
    
    $query = "INSERT INTO formulario (nombre) VALUES('$nom')";//agregar id profesor $_SESSION
    $resQuery = mysql_query($query,$db) or die(mysql_error());
    $query2 = "SELECT id FROM formulario WHERE nombre='$nom'";
    $resQuery2 = mysql_query($query2,$db) or die(mysql_error());
    $row = mysql_fetch_row($resQuery2);
    $idrow=$row[0];
   for ( $i = 1 ; $i <= $largo ; $i=$i+3){
       $pregunta=(string) $id[$i];
       $solucion=$id[$i+1];
       $unidad=(string) $id[$i+2];
       $query3 = "INSERT INTO pregunta(enunciado,tipo,respuesta,etiqueta,unidad,id_formulario)
              VALUES('$pregunta','a','$solucion','1','$unidad','$idrow')";
       $resQuery3 = mysql_query($query3,$db) or die(mysql_error());
    }
        $jsondata['respuesta'] = 1;
        echo json_encode($jsondata);
}
?>
