<?php

function conectarDB(){
	/* Database config */

	$db_host		= 'localhost';
	$db_user		= 'root';
	$db_pass		= 'taller';
	$db_database	= 'quimica'; 
	
	
	
	$conexion = mysql_connect($db_host,$db_user,$db_pass)or die(mysql_error());
	mysql_select_db($db_database,$conexion)or die(mysql_error());
    
    
	return $conexion;
}

function desconectarDB(){
	mysql_close()or die(mysql_error());
}



?>