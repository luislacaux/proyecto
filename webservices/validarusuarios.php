<?php
function validarUsuario($usuario,$contrasena){
               $db=conectarDB();
               $query = "select rut from estudiante where rut ='$usuario'";
	       $resQuery = mysql_query($query,$db) or die(mysql_error());
	      
               while ($row = mysql_fetch_row($resQuery))

               if($row[0]==$usuario){
                    $db = null;
	            return 1;
                }
               
                
	        else {  return 0;}
   
		
	}
?>
