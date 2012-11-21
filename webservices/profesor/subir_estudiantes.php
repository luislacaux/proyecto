<?php
include ("../mysql.php");
session_start();
//tomo el valor de un elemento de tipo texto del formulario 
$folder = "../../upload";


if (is_uploaded_file($_FILES['userfile']['tmp_name']))  {   
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $folder.$_FILES['userfile']['name'])) {
	   $contador = 0;
           $fp = fopen($folder."export.csv", "r");
           while(( $data = fgetcsv ( $fp , 2048, ";" )) !== false ){
                 foreach($data as $row){
                     
                     $datos[$contador]=$row;
                     $contador++;
                 }
		}
          


           //$data = new Spreadsheet_Excel_Reader($folder.$_FILES['userfile']['name']);
           escrituraEstudiantes($datos);          
    } else {
         echo "File not moved to destination folder. Check permissions";
    }
} else {
     echo "File is not uploaded.";
}






function escrituraEstudiantes($data){
           $sem = $_POST["semestre"];
           $anio = $_POST["anio"];
           $grupo = $_POST["grupo"];
	   $db = conectarDB();
           if (!$db) {
             die('Could not connect: ' . mysql_error());
            }
          
            $apellido = 1;
            $apellido_sin_espacios=  explode(" ",$data[$apellido]);
            $nombre = 2;
            $nombre_sin_espacios = explode(" ",$data[$nombre]);
            $email = 3;
            $rut = 4;
            $rut_s_guion = explode("-",$data[$rut]);
            $nom = $nombre_sin_espacios[0]." ".$nombre_sin_espacios[1]." ".$apellido_sin_espacios[0]." ".$apellido_sin_espacios[1];
            $result = "INSERT INTO estudiante (rut,nombre,grupo_paralelo,correo,semestre,fecha) VALUES ('$rut_s_guion[0]','$nom','$grupo','$data[$email]','$sem','$anio')";
            $resQuery3 = mysql_query($result,$db) or die(mysql_error());
           
           for($k = 6;$k <(count($data));$k=$k+6){
               
               $apellido = $k+1;
               $apellido_sin_espacios=  explode(" ",$data[$apellido]);
               $nombre = $k +2;
               $nombre_sin_espacios = explode(" ",$data[$nombre]);
               $email = $k +3;
               $rut = $k +4;
               $rut_s_guion = explode("-",$data[$rut]);
               $nom = $nombre_sin_espacios[0]." ".$nombre_sin_espacios[1]." ".$apellido_sin_espacios[0]." ".$apellido_sin_espacios[1];
               $result = "INSERT INTO estudiante (rut,nombre,grupo_paralelo,correo,semestre,fecha) VALUES ('$rut_s_guion[0]','$nom','$grupo','$data[$email]','$sem','$anio')";
               $resQuery3 = mysql_query($result,$db) or die(mysql_error());
           }
           header("Location: ../../profesor/estudiantes/subir_lista.php");
    
}


?>