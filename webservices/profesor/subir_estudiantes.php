<?php
include ("../mysql.php");
session_start();
$idi = $_POST['data'];
$id = (string) $idi; 
$idArray = explode(",", $id);
error_reporting(E_ALL ^ E_NOTICE);
include 'excel_reader.php';
//tomo el valor de un elemento de tipo texto del formulario 
$folder = "../../upload/";


if (is_uploaded_file($_FILES['userfile']['tmp_name']))  {   
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $folder.$_FILES['userfile']['name'])) {
	   
          
           $data = new Spreadsheet_Excel_Reader($folder.$_FILES['userfile']['name']);
           escrituraEstudiantes($idArray,$data);
           
    } else {
         echo "File not moved to destination folder. Check permissions";
    }
} else {
     echo "File is not uploaded.";
}

function escrituraEstudiantes($id,$data){
           $sem = $id[0];//arreglar, traer datos con JSON
           $anio = $id[1];
           $grupo = $id[2];
           //echo $data->dump(true,true);
            $datos = array();
            $c = 0;
            //$str = "";
            for ($i = 2; $i <= $data->rowcount(0); $i++) {
                for ($j = 2; $j <= 7; $j++) {
                    $datos[$c] = $data->val($i,$j);
                    //$str .= $datos[$c];
                    //$str .= " ";
                    $c = $c+1;
                }
            }
           $db = conectarDB();
           if (!$db) {
             die('Could not connect: ' . mysql_error());
            }
        //  (nombre_de_la_BD)  
           
           for($k = 1;$k <(count($datos));$k=$k+4){
               $e = $k;
               $correo = $k +2;
               $nom = ($k +1)." ".($e);
               $rutt = $k +3;
               $result = mysql_query("INSERT INTO estudiante(rut,nombre,grupo,correo,semestre,fecha) 
                                      VALUES ($datos[$rutt]','$datos[$nom]','$grupo','$datos[$correo]','$sem','$anio')");
               
           }
           if (!$result) {
             die('Could not query:' . mysql_error());
           }
           mysql_close($db);
           header("Location: ../../profesor/estudiantes/subir_lista.php");
           exit(0);
    
    
    
}



?>