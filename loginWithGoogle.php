<?php
require_once 'vendor/autoload.php';  // Load the Composer autoload file

session_start();

// Create a new Google client
$client = new Google_Client();
$client->setClientId('296813048340-jjg4i8ecfig93fmigmcs6lcaqi8gh6mb.apps.googleusercontent.com');
$client->setClientSecret('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');
$client->setRedirectUri('http://localhost/practicalLoginSystem(GitHub)/loginWithGoogle.php');
$client->addScope('email');
$client->addScope('profile');

// Handle the Google authentication callback
if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token);

    // Get the user's Google profile information
    $google_service = new Google_Service_Oauth2($client);
    $user_info = $google_service->userinfo->get();

    // Use session or database to store user information
    $_SESSION['email'] = $user_info->email;
    $_SESSION['name'] = $user_info->name;

    // Redirect to dashboard or a different page after successful login
    header('Location: dashboard.php');
    exit();
}

// If not authenticated, generate the Google Auth URL
if (!$client->getAccessToken()) {
    $authUrl = $client->createAuthUrl();
    header('Location: ' . filter_var($authUrl, FILTER_SANITIZE_URL));
    exit();
}
