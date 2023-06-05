<?php
error_reporting(0);
session_start();
// PLANES.PHP
include '../soporte/index-base.php';
// $_SESSION["zf-intentos"] = $_SESSION["zf-intentos"]+ 1;
// print "Intentos : " . $_SESSION["zf-intentos"];
// include './Login/Login-HEAD-HTML.php';
// $_SESSION['data'] = json_decode(file_get_contents('http://191.101.78.67:8080/api/v1/estado/'));
// var_dump($_SESSION['data']);
// print $_SESSION['data'][0]->estado_Abrevia;
if(isset($_SESSION["zf-token"])) {
    include './planes.php';
    LoginUsuario($swHidde);
} else {
    header("Location: ../login", TRUE, 301);
    exit();
}
?>
