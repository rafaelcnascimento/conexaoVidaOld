<?php 

require_once 'vendor/autoload.php'; // change path as needed

session_start();

$fb = new Facebook\Facebook([
'app_id' => '226294841398946', // Replace {app-id} with your app id
'app_secret' => '5131a58eddd55bc63a376dd55cef202a',
'default_graph_version' => 'v3.0',
//'default_access_token' => '{access-token}', // optional
]);

// Use one of the helper classes to get a Facebook\Authentication\AccessToken entity.
//   $helper = $fb->getRedirectLoginHelper();
//   $helper = $fb->getJavaScriptHelper();
//   $helper = $fb->getCanvasHelper();
//   $helper = $fb->getPageTabHelper();

$helper = $fb->getRedirectLoginHelper();  

if (isset($_GET['state'])) {
    $helper->getPersistentDataHandler()->set('state', $_GET['state']);
}

$accessToken = $helper->getAccessToken();  

$response = $fb->get('/me?fields=id,name,email,gender', $accessToken );

try {
    // Get the \Facebook\GraphNodes\GraphUser object for the current user.
    // If you provided a 'default_access_token', the '{access-token}' is optional.
    $response = $fb->get('/me', $accessToken);
    } catch(\Facebook\Exceptions\FacebookResponseException $e) {
    // When Graph returns an error
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
    } catch(\Facebook\Exceptions\FacebookSDKException $e) {
    // When validation fails or other local issues
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
}

$me = $response->getGraphUser();
echo 'Logged in as ' . $me->getName();
echo '<br>ID =' . $me->getId();
echo '<br>Gender =' . $me->getGender();
echo '<br>Emal =' . $me->getEmail();

