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

$assignmentsResource = new \Crewsense\apisdk\v1\resources\Assignments($client);
$formsResource = new \Crewsense\apisdk\v1\resources\Forms($client);

$assignments = $assignmentsResource->get();
$forms = $formsResource->get();

foreach ($assignments as $assignment) {
//    $assignment->
    var_dump($assignment); die;
}

die;