<?php require_once 'vendor/autoload.php';

use Textko\Sms;

$sms = new Sms('YourAccessToken');

$response = $sms->send('09171234567', 'My txt msg.');

var_dump($response);