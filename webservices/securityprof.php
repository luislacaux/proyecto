<?php
session_start();
//comprueba que el usuario este logeado
if (!isset($_SESSION["autenticadoprof"]) or $_SESSION["autenticadoprof"] != "SI") {
//si no existe, va a la pagina de login
header("Location: ../");

exit();
}
?>