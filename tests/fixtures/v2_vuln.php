<?php
// Fixture: v1.1.0 rules, vulnerable PHP.
$tpl = $twig->createTemplate($_GET['tpl']);
echo $tpl->render([]);

setcookie('session', $sid, ['httponly' => false]);

$ch = curl_init('https://api.example.com');
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

header('Access-Control-Allow-Origin: ' . $_SERVER['HTTP_ORIGIN']);
header('X-User: ' . $_GET['name']);

$reset_token = substr(md5(uniqid(rand(), true)), 0, 8);
$otp = mt_rand(100000, 999999);

if ($_POST['token'] == $stored_token) {
    echo 'in';
}
