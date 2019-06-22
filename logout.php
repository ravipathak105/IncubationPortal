<?php

require_once 'google_config.php';
// Initialize the session
session_start();
 
// Unset all of the session variables
/*if(isset($_SESSION['access_token'])){
    $gClient->revokeToken();
}*/
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: index.html");
exit;
?>