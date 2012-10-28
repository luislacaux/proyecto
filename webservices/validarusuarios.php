<?php
function validarUsuario($usuario,$contrasena){
                $db=conectarDB();
               $query = "select rut, contrasena from estudiante where rut ='$usuario'";
	       $result = $db->query($query);
		
               foreach($result as $row){
                                 
               }

               if($row[0]==$usuario){
                    $db = null;
	            return 1;
                }
               
                
	        else {  return 0;}
   
		
	}
?>
