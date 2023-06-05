<?php
error_reporting(0);
session_start();
// /DISTRIBUIDOR/LOGIN/REGISTRO/NUEVO.PHP
include '../../../soporte/index-base.php';
//
// print "Intentos : " . $_SESSION["zf-intentos"];
/*
if($_SESSION['zf-token']!=""){
    $swHidde = "hidden";
    header("Location: /distribuidor/planes");
    die();
}
//
if($_SESSION['zf-token']==""){
    header("Location: /distribuidor/login");
    die();
}
*/
$_SESSION['zf-email'] = isset($_POST["zf_email"]) ? $_POST["zf_email"] : "";
$_SESSION['zf-password'] = isset($_POST["zf_password"]) ? $_POST["zf_password"] : "";

$data = array("username" => $_SESSION['zf-email'], "email" => $_SESSION['zf-email'], "password" => $_SESSION['zf-password']); // "role" => ["mod"]
$data_string = json_encode($data);
// echo $data_string;
// var_dump($_SESSION['data']);
// print $_SESSION['data'][0]->user_EMail;
$urlAPI = curl_init('http://191.101.78.67:8088/api/auth/signup');
curl_setopt($urlAPI, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($urlAPI, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($urlAPI, CURLOPT_RETURNTRANSFER, true);
curl_setopt($urlAPI, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data_string))
);

$json_Data = curl_exec($urlAPI);
$_SESSION['data'] = $json_Data;
$httpcode = curl_getinfo($urlAPI, CURLINFO_HTTP_CODE);
curl_close($urlAPI);
// echo $httpcode;
// var_dump($_SESSION['data']);
// print $_SESSION['data'][0]->user_EMail;
if($httpcode == 200) {
    $_SESSION["zf-intentos"] = 0;
    $swHidde = "hidden";
    // header("Location: /distribuidor/login");
    // die();
    include './nuevo.php';
    show_PageWeb($swLogin);
    die();
}
else
{
    // $httpcode ==> 400 cuando la cuenta ya existe
    // message
    // echo $httpcode . " / ";
    // var_dump($_SESSION['data']);
    // $data_string = json_encode($_SESSION['data']);
    // echo $data_string->error;
    $swHidde = "hidden";
    include './error.php';
    show_PageWeb($swLogin);
    die();
}
?>
<?php
/* --
$zf_Sesion = '{"ZF_Cuenta": "", "ZF_HoraLimite": null, "ZF_HoraIngreso": null, "ZF_Intentos": 0, "ZF_IntentMax": 5, "ZF_Token": null}';
$objSesion = json_decode($zf_Sesion);
$_SESSION["zf-intentmax"]= isset($_SESSION["zf-intentmax"]) ? $_SESSION["zf-intentmax"] : $objSesion->ZF_IntentMax;
-- */
/*
if($_SESSION['zf-token']==""){
  $_SESSION["zf-intentos"] = $_SESSION["zf-intentos"]+ 1;
  if($_SESSION["zf-intentos"] > $_SESSION["zf-intentmax"]) {
    $_SESSION["zf-intentos"] = $_SESSION["zf-intentmax"];
    include '../login-bloqueado.php';
    page_Login($swHidde);
    die();
  }
  
  $data = array("username" => $_SESSION['zf-email'], "password" => $_SESSION['zf-password']);
  $data_string = json_encode($data);

  $urlAPI = curl_init('http://191.101.78.67:8088/api/auth/zf_signin');
  curl_setopt($urlAPI, CURLOPT_CUSTOMREQUEST, "POST");
  curl_setopt($urlAPI, CURLOPT_POSTFIELDS, $data_string);
  curl_setopt($urlAPI, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($urlAPI, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data_string))
  );

  $json_Data = curl_exec($urlAPI);
  $_SESSION['data'] = $json_Data;
  $httpcode = curl_getinfo($urlAPI, CURLINFO_HTTP_CODE);
  curl_close($urlAPI);
  
  if($httpcode == 200) {
    $_SESSION["zf-intentos"] = 0;
    $jwtToken = json_decode( $json_Data, true );
    $_SESSION['zf-token'] = $jwtToken;
    $swHidde = "hidden";
    header("Location: /distribuidor/planes");
    die();
  }
}

// $httpcode --> 401 Acceso no autorizado, por falta de credenciales
$swHidde = "hidden";
header("Location: ../error");
die();
*/
?>
