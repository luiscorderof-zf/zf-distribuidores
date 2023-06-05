<?php
error_reporting(0);
session_start();

session_unset();   // Esto limpia mejor
session_destroy(); // Complementa la limpieza

include './cerrar-sesion.php';
CerrarSesion($swHidde);
$_SESSION["zf-intentos"] = 0;
exit();
?>
