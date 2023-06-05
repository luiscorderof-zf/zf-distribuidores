<?php
error_reporting(0);
session_start();

include './soporte/index-base.php';

if(isset($_SESSION["zf-token"])) {
    header("Location: ./planes", TRUE, 301);
    exit();
} else {
    header("Location: ./login", TRUE, 301);
    exit();
}
?>
