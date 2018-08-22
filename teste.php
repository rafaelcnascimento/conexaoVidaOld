<?php 

require_once 'vendor/autoload.php'; // change path as needed

$fb = new Facebook\Facebook([
    'app_id' => '226294841398946', // Replace {app-id} with your app id
    'app_secret' => '5131a58eddd55bc63a376dd55cef202a',
    'default_graph_version' => 'v3.0',
]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email','user_gender']; // Optional permissions
$loginUrl = $helper->getLoginUrl('http://localhost/fallback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';

