<?php
//tomo el valor de un elemento de tipo texto del formulario 
$folder = "../";

//datos del arhivo 

//compruebo si las caracterÃ­sticas del archivo son las que deseo 
if (is_uploaded_file($_FILES['userfile']['tmp_name']))  {   
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $folder.$_FILES['userfile']['name'])) {
	   header("Location: subir_lista.php");
	   exit();	
         //Echo “File uploaded”;
    } else {
         echo "File not moved to destination folder. Check permissions";
    }
} else {
     echo "File is not uploaded.";
}



   	//if (move_uploaded_file($_FILES['userfile']['tmp_name'],$cadenatexto.$nombre_archivo)){ 
              
      	 //echo "El archivo ha sido cargado correctamente."; 
         
   	//}else{ 
      	 //echo "OcurriÃ³ algÃºn error al subir el fichero. No pudo guardarse."; 
   	//} 
 
?> 