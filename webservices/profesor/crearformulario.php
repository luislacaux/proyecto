
<?php
include ("mysql.php");
$idi = $_GET['id'];
crearformulario($idi);
function crearformulario($id){
    $db=conectarDB();
    $query = "INSERT
              INTO
              VALUE";
    $resQuery = mysql_query($query,$db) or die(mysql_error());
    //$row = mysql_fetch_row($resQuery);
    
    
    
    if(mysql_affected_rows()>0){
        $jsondata['respuesta'] = 1;
        echo json_encode($jsondata);
        echo "OK, Venta realizada exitosamente";
    }
    
    
    
    
}
?>
