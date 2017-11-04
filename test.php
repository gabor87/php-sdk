<?php

require_once __DIR__ . '/vendor/autoload.php';

spl_autoload_register(function ($class) {
    $file = str_replace('Crewsense/apisdk/', '', str_replace('\\', '/', $class)) .'.php';
    if (file_exists($file)) {
        require $file;
    }
});

$client = new Crewsense\apisdk\v1\Client([
    'credentials' => [
        'client_id' => '8fkmab4vzx', 
        'client_secret' => '2eoccd9z5ohks1ot9hsd6winlysj85g1',
    ],
]);

$assignmentsGroups = new \Crewsense\apisdk\v1\resources\AssignmentsGroups($client, 1);
echo $assignmentsGroups->getResourcePath();
echo PHP_EOL;

//$client->

