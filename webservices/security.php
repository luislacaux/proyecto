<?php
session_start();
//comprueba que el usuario este logeado
if (!isset($_SESSION["autenticado"]) or $_SESSION["autenticado"] != "SI") {
//si no existe, va a la pagina de login
header("Location: ../index.html");

exit();  
}
?>