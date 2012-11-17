<?php
include("../mysql.php");
  $info = $_POST['datos'];
  $grp = explode(" ", $info); 
  $rut = $grp[0];
  $grupo = $grp[1];
  $lab = $grp[2];
  set_asis($rut,$grupo,$lab);
 
function set_asis($rut,$grupo,$lab,$periodo,$semestre) {
   $db = conectarDB();
   
   $query = "SELECT id FROM laboratorio where grupo_paralelo = '$grupo' and tipo_lab='$lab' and periodo ='$periodo' and semestre= '$semestre'";
   $resQuery = mysql_query($query,$db) or die(mysql_error());
   $row  = mysql_fetch_row($resQuery);
   $id_lab = $row[0];
   $query2 = "INSERT INTO asistencia(id_laboratorio,valor)   
              VALUE('$id_lab',1)";
  


   $jsondata['nombre'] = $stringNombre;
   $jsondata['rut'] = $stringRut;
 
   echo json_encode($jsondata);
   mysql_close($db);
 }
?>