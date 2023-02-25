<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('1048838644409-rql8iurf36urnt2dp0mo3o8nnfnsoq3p.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/project/home.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>