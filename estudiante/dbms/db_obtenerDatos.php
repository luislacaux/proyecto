<?php

require_once('dbms_function.php');

/*SELECT de UNIDADES*/

function dbObtieneEnunciados($conexion){
    $sql = "    SELECT ENUNCIADO, UNIDAD
				FROM TEMARIO      ";
    
$respuesta = dbEjecutarConsulta($sql, $conexion);
    if ($respuesta) {
        if (mysql_num_rows($respuesta) > 0) {
            $_resp = array();
            $i = 0;
            while ($_fila = mysql_fetch_array($respuesta, MYSQL_BOTH)) {
                $_resp[$i]["enunciados"] = $_fila["ENUNCIADO"];
                $_resp[$i]["unidades"] = $_fila["UNIDAD"];                
                $i++;
            }
        }    
    }
   
    return $_resp;
}
/*INSERT DE RESPUESTAS*/
function dbInsertaRespuestas($respuestita,$conexion){
    $sql = "    INSERT INTO INSERCIONES(RESPUESTA)
				VALUES(".$respuestita.") ";
				
    
	dbEjecutarConsulta($sql, $conexion);
    
}

?>