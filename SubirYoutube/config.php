<?php
// Include google client libraries
session_start();
require_once '../GoogleAPI/vendor/autoload.php'; 
require_once '../GoogleAPI/vendor/google/apiclient-services/src/Google/Service/YouTube.php';
$gclient = new Google_Client();
$gclient->setClientId("129659152028-hlaens37noe9ksr1o8m0vbik859nba77.apps.googleusercontent.com");
$gclient->setClientSecret("AIzaSyAqb1oY3qtiavR6tggKMuEzPB7MscBRgv8");
$gclient->setScopes('https://www.googleapis.com/auth/youtube');
$gclient->setRedirectUri("http://localhost/youtube/callback.php");

// Define an object that will be used to make all API requests.
$youtube = new Google_Service_YouTube($gclient);
    
?>
