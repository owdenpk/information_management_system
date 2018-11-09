<?php
require_once "vendor/autoload.php";
$basic  = new \Nexmo\Client\Credentials\Basic('5381351b', 'kDY59yj2B3x5pVRm');
$client = new \Nexmo\Client($basic);

$message = $client->message()->send([
    'to' => '254790921553',
    'from' => 'Nexmo',
    'text' => 'Hey '
]);


?>

