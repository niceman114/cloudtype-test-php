<?php
require 'vendor/autoload.php';

use Predis\Client;

$id = getenv('MY_ID');
$pass = getenv('MY_PASS');

echo '<p>'.$id.' | '.$pass.'</p>';

$redisClient = new Client([
    'scheme' => 'tcp',
    'host' => 'my-redis',
    'port' => 6379
]);

$redisClient->set('id', $id);
$redisClient->set('pass', $pass);

$cachedId = $redisClient->get('id');
$cachedPass = $redisClient->get('pass');

echo '<p>'.$cachedId.' | '.$cachedPass.'</p>';
