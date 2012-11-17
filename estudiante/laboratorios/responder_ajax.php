<?php
require_once("../dbms/conexion.php");
require_once("../dbms/dbms_function.php");
require_once("../dbms/db_obtenerDatos.php");

$conexion = dbConectar($config_host_bd, $config_usuario_bd, $config_password_bd, $config_bd);

$accion = $_POST["faccion"];
if($accion=="ingresar_respuestas"){
	$respuesta = $_POST["respuestas"];
	
	$respt = explode("|", $respuesta);
	$ncampos = sizeof($respt);
	for($i=0;$i<$ncampos;$i++){
			dbInsertaRespuestas($respt[$i],$conexion);
	}
	echo "Todo salio bien";
	
}
?>
