<?php
include ("mysql.php");

//Inicio la sesion 
session_start();
$idi = $_POST['dato'];
$id = (string) $idi; 
$idArray = explode(" ", $id);

crearlab($idArray);

function crearlab($dato){
    
    $db =  conectarDB();
    $periodo=$dato[0];
    $grupo=$dato[1];
    $semestre=$dato[2];
    $limite=$dato[3];
    $nom_form=$dato[4];
    $profesor = $_SESSION["rut"];
    
    //querys
    $query = "SELECT id FROM formulario WHERE nombre = '$nom_form'";
    $query2= "SELECT id FROM profesor WHERE rut = '$profesor'";
    
    $resQuery = mysql_query($query,$db) or die(mysql_error());
    $resQuery2 = mysql_query($query2,$db) or die(mysql_error());
    $row = mysql_fetch_row($resQuery);
    $row2 = mysql_fetch_row($resQuery2);
    
    $id_form = $row[0];
    $id_prof = $row2[0];
    $hoy = date("Y-m-d"); 
    
    $queryInsert = "INSERT INTO laboratorio(fecha,periodo,grupo_paralelo, semestre, limite_por_grupo, id_formulario, id_profesor)
                    VALUES('$hoy','$periodo','$grupo','$semestre','$limite','$id_form','$id_prof')";
    
    
    $resQuery3 = mysql_query($queryInsert,$db) or die(mysql_error());
    
    if(mysql_affected_rows()>0){
        $jsondata['resp'] = "OK";
        echo json_encode($jsondata);
        
        
    }
    
}

?>
