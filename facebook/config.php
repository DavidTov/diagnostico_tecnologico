<?php
	require_once "sdk-php/Facebook/autoload.php";
	if(!session_id()) {
    session_start();
}
	$fb=new \Facebook\Facebook([
		'app_id'=>'181065602546124',
		'app_secret'=>'bf0f0e25ddbac04656008c2595c7e3b7',
		'default_graph_version'=>'v3.0'
	]);
	$helper=$fb->getRedirectLoginHelper();
?>