<?php
    session_start();
    require_once 'GoogleAPI/vendor/autoload.php';
    require_once 'GoogleAPI/vendor/google/apiclient-services/src/Google/Service/Youtube.php';
    $gClient = new Google_Client();
    $gClient->setClientId("129659152028-hlaens37noe9ksr1o8m0vbik859nba77.apps.googleusercontent.com");
    $gClient->setClientSecret("AIzaSyAqb1oY3qtiavR6tggKMuEzPB7MscBRgv8");
    $gClient->setApplicationName("SubirYoutube");
    $gClient->setRedirectUri("http://localhost/youtube/callback.php");
    //SCOPE SON LOS PERMIOSOS
    $gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/youtube");


    $youtube = new Google_Service_YouTube($gclient);
?>