<?php
include ("../mysql.php");
session_start();
error_reporting(E_ALL ^ E_NOTICE);
include 'excel_reader2.php';
//tomo el valor de un elemento de tipo texto del formulario 
$folder = "../../upload/";


if (is_uploaded_file($_FILES['userfile']['tmp_name']))  {   
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $folder.$_FILES['userfile']['name'])) {
	   
          
           $data = new Spreadsheet_Excel_Reader($folder.$_FILES['userfile']['name']);
           echo $data->rowcount(0);
          escrituraEstudiantes($data);          
    } else {
         echo "File not moved to destination folder. Check permissions";
    }
} else {
     echo "File is not uploaded.";
}






function escrituraEstudiantes($data){
           
           //echo $data->dump(true,true);
		
           $sem = $_POST["semestre"];
            $anio = $_POST["anio"];
            $grupo = $_POST["grupo"];
		
            $datos = array();
            $c = 0;
            //$str = "";
            for ($i = 1; $i <= $data->rowcount(0); $i++) {
                for ($j = 2; $j <= 5; $j++) {
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
           
           for($k = 0;$k <(count($datos));$k=$k+4){
              $apellido = $k;
		$nom = $k +1;               
		$correo = $k +2;
		$rutt = $k +3;
		$nombreCompleto = $datos[$nom]." ".$datos[$apellido];
		echo $datos[$rutt];
		$result = "INSERT INTO estudiante(rut,nombre,grupo_paralelo,correo,semestre,fecha) 
                        VALUES ('$datos[$rutt]','$nombreCompleto','$grupo','$datos[$correo]','$sem','$anio')";
		$resQuery3 = mysql_query($result,$db) or die(mysql_error());
    

           }
		
         
           header("Location: ../../profesor/estudiantes/subir_lista.php");
           
    
    
    
}



?>