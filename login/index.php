<?php
error_reporting(0);
session_start();
include '../soporte/index-base.php';
if($_SESSION['zf-token']==""){
    include './login.php';
    page_Login($swHidde);    
    die();
}
else {
    $swHidde = "hidden";
    header("Location: /distribuidor/planes");
    die();
}
?>
