<?php

/**
 * Realiza conexión con MySQL 
 * @author      José Luis Carrasco V.
 */
function dbConectar($host, $usuario, $password, $bd) {
    if ($host != "" && $usuario != "" && $password != "" && $bd != "") {
        if (($conexion = mysql_connect($host, $usuario, $password))) {
            if (( mysql_select_db($bd, $conexion))) {
                mysql_set_charset('utf8');
                return $conexion;
            }
        }
    }
    return false;
}

/**
 * Realiza desconexión con MySQL
 *
 * @author      José Luis Carrasco V.
 */
function dbDesconectar($conexion) {
    if ((mysql_close($conexion))) {
        return true;
    }
    return false;
}

/**
 * Ejecuta consulta con MySQL
 *
 * @author      José Luis Carrasco V.
 */
function dbEjecutarConsulta($consulta, $conexion) {
    global $global_error_bd;
    $global_error_bd = "";
    if (($resultado = mysql_query($consulta, $conexion))) {
        return $resultado;
    }
    $global_error_bd = mysql_error();
    return false;
}

?>


