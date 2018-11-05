<?php
	require_once("config.php");
	//require_once("sdk-php/Facebook/Facebook.php");

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('https://localhost/proyecto-final-1/sistema-poa/facebook/fb-callback.php', $permissions);

//echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';


?>