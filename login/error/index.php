<?php
error_reporting(0);
session_start();
include '../login-base.php';
/*
$zf_Sesion = '{"ZF_Cuenta": "", "ZF_HoraLimite": null, "ZF_HoraIngreso": null, "ZF_Intentos": 0, "ZF_IntentMax": 5, "ZF_Token": null, "ZF_MTenant": ""}';
$objSesion = json_decode($zf_Sesion);

$_SESSION["zf-mtenant"]  = isset($_SESSION["zf-mtenant"])  ? $_SESSION["zf-mtenant"]  : $objSesion->ZF_MTenant;
$_SESSION["zf-cuenta"]   = isset($_SESSION["zf-cuenta"])   ? $_SESSION["zf-cuenta"]   : $objSesion->ZF_Cuenta;
$_SESSION["zf-intentos"] = isset($_SESSION["zf-intentos"]) ? $_SESSION["zf-intentos"] : $objSesion->ZF_Intentos;
$_SESSION["zf-token"]    = isset($_SESSION["zf-token"])    ? $_SESSION["zf-token"]    : $objSesion->ZF_Token;
$_SESSION["zf-intentmax"]= isset($_SESSION["zf-intentmax"])? $_SESSION["zf-intentmax"]: $objSesion->ZF_IntentMax;
$sw_Login = true;
*/
if($_SESSION['zf-log-error']==""){
    $swHidde = "hidden";
    header("Location: /distribuidor/login");
    die();
}
else {
    include './error.php';
    page_Login($swHidde);    
    die();
}
?>
