<?php

require_once __DIR__ . '/vendor/autoload.php';

require './Client.php';

$client = new \Crewsense\Client([
    'credentials' => [
        'client_id' => '8fkmab4vzx', 
        'client_secret' => '2eoccd9z5ohks1ot9hsd6winlysj85g1',
    ],
]);
$client->tokenIsValid();