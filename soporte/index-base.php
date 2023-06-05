<?php
$zf_Sesion = '{"zf_Cuenta": "", "zf_HoraLimite": null, "zf_HoraIngreso": null, "zf_Intentos": 0, "zf_IntentMax": 5, "zf_Token": null, "zf_Log_Error": -1, "zf_MTenant": "c63d1c185cd3662d244c247e0f37bfff"}';
$objSesion = json_decode($zf_Sesion);
// Zapphiro-Fragancias -> c63d1c185cd3662d244c247e0f37bfff
$_SESSION["zf-mtenant"]  = isset($_SESSION["zf-mtenant"])  ? $_SESSION["zf-mtenant"]  : $objSesion->zf_MTenant;
$_SESSION["zf-cuenta"]   = isset($_SESSION["zf-cuenta"])   ? $_SESSION["zf-cuenta"]   : $objSesion->zf_Cuenta;
$_SESSION["zf-intentos"] = isset($_SESSION["zf-intentos"]) ? $_SESSION["zf-intentos"] : $objSesion->zf_Intentos;
$_SESSION["zf-token"]    = isset($_SESSION["zf-token"])    ? $_SESSION["zf-token"]    : $objSesion->zf_Token;
$_SESSION["zf-intentmax"]= isset($_SESSION["zf-intentmax"])? $_SESSION["zf-intentmax"]: $objSesion->zf_IntentMax;
$_SESSION["zf-log-error"]= isset($_SESSION["zf-log-error"])? $_SESSION["zf-log-error"]: $objSesion->zf_Log_Error;
$sw_Login = true;
?>
