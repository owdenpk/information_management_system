<?php
require_once "vendor/autoload.php";
$basic  = new \Nexmo\Client\Credentials\Basic('5381351b', 'kDY59yj2B3x5pVRm');
$client = new \Nexmo\Client($basic);

$message = $client->message()->send([
    'to' => '254790921553',
    'from' => 'Nexmo',
    'text' => 'Hey Mr OPK, This is to notify that you have worn new brand Galaxy Note 9. Please Call this no. 0790921553 to claim your prize. Good day '
]);

header("index.php");
?>

