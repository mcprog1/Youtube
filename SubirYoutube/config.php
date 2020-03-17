<?php
// Include google client libraries
session_start();
require_once '../GoogleAPI/vendor/autoload.php'; 
require_once '../GoogleAPI/vendor/google/apiclient-services/src/Google/Service/YouTube.php';
$oauthClientID     = '129659152028-c110k67tm866tk1d7vvcg070gfigimsq.apps.googleusercontent.com';
$oauthClientSecret = 'u4eyZ4Gl3OuDkxEiAsKgiEWf';
$baseURL           = 'http://localhost/youtube/SubirYoutube/';
$redirectURL       = $baseURL.'upload.php';

define('OAUTH_CLIENT_ID',$oauthClientID);
define('OAUTH_CLIENT_SECRET',$oauthClientSecret);
define('REDIRECT_URL',$redirectURL);
define('BASE_URL',$baseURL);
$client = new Google_Client();
$client->setClientId(OAUTH_CLIENT_ID);
$client->setClientSecret(OAUTH_CLIENT_SECRET);
$client->setScopes('https://www.googleapis.com/auth/youtube');
$client->setRedirectUri("http://localhost/youtube/SubirYoutube/upload.php");

// Define an object that will be used to make all API requests.
$youtube = new Google_Service_YouTube($client);
    
?>
