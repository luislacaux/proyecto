<?php
error_reporting(E_ALL ^ E_NOTICE);
include 'excel_reader.php';
//tomo el valor de un elemento de tipo texto del formulario 
$folder = "../../upload/";


if (is_uploaded_file($_FILES['userfile']['tmp_name']))  {   
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $folder.$_FILES['userfile']['name'])) {
	   
          
           $data = new Spreadsheet_Excel_Reader($folder.$_FILES['userfile']['name']);
           $id = 0;
           $sem = $_POST['semestre'];
           $anio = $_POST['anios'];
           //echo $data->dump(true,true);
            $datos = array();
            $c = 0;
            //$str = "";
            for ($i = 2; $i <= 10; $i++) {
                for ($j = 2; $j <= 7; $j++) {
                    $datos[$c] = $data->val($i,$j);
                    //$str .= $datos[$c];
                    //$str .= " ";
                    $c = $c+1;
                }
            }
           $db = mysql_connect('localhost', 'root', 'taller');
           if (!$db) {
             die('Could not connect: ' . mysql_error());
            }
        //  (nombre_de_la_BD)  
           if (!mysql_select_db('prueba')) {
             die('Could not select database: ' . mysql_error());
            }
           for($k = 0;$k <(count($datos));$k=$k+6){
               $i = $k;
               $d = $k +1;
               $e = $k +2;
               $f = $k +3;
               //$g = $k +4;
               //$h = $k +5;
               $result = mysql_query("INSERT INTO `prueba`.`tabla_test` (`id`, `rut` , `nombre`, `grupo` , `correo` , `semestre` , `fecha`) VALUES ('$id','$datos[$i]','$datos[$d]','$datos[$e]','$datos[$f]','$sem','$anio')");
               $id++;
           }
           if (!$result) {
             die('Could not query:' . mysql_error());
           }
           mysql_close($db);
           header("Location: ../../profesor/estudiantes/subir_lista.php");
           exit(0);
    } else {
         echo "File not moved to destination folder. Check permissions";
    }
} else {
     echo "File is not uploaded.";
}

?>