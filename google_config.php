<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$guzzleClient = new \GuzzleHttp\Client(array( 'curl' => array( CURLOPT_SSL_VERIFYPEER => false, ), ));
	$gClient = new Google_Client();
	$gClient->setHttpClient($guzzleClient);
	$gClient->setClientId("858707340392-j4ud008npooequ8g8igsnca2p2c0in1p.apps.googleusercontent.com");
	$gClient->setClientSecret("SIa9rYvzIUEK5q8xPgR3mSQP");
	$gClient->setApplicationName("SRMS");
	$gClient->setRedirectUri("http://localhost/srms/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
