<?php
error_reporting(0);
// include './Login/Login-HEAD-HTML.php';

session_start();
$jwt_Session = "";
$swHidde = "";
/*
try {
    // $jwt_Session = $_SESSION["jwtToken"];
    // Pendiente de verificar con isset()
    if(isset($_SESSION['jwtToken'])) {
        //
    }
    // echo "<span>Session : " . $_SESSION['jwtToken'] . "</span>";
    $jwt_Session = $_SESSION['jwtToken'];
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
} finally {
    // echo "First finally.\n";
}

// // $swHidde = "";
if ($jwt_Session == "") {
    $_SESSION['user_SignForm'] = "";
    $_SESSION['jwtToken'] = "";
    $_SESSION['user_Account'] = "";
    $_SESSION['user_Password'] = "";    
    // LoginUsuario("");
} 
else 
{
    // echo "Session : " . $jwt_Session;
    $swHidde = "hidden";
    header("Location: /Login");
    die();
}
*/
include './dashboard.php';
LoginUsuario($swHidde);
?>
