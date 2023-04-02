<?php

use Api\Transport\Train;
use Api\Transport\AirportBus;
use Api\Transport\Plane;

require_once __DIR__ . '/vendor/autoload.php';


$list = [
    'c' => new Plane('Gerona Airport', 'Stockholm', 'SK455','3A', '45B', '344'),
    'b' => new AirportBus('Barcelona', 'Gerona Airport'),
    'a' => new Train('Madrid', 'Barcelona', '78A', '45B'),
    'd' => new Plane('Stockholm', 'New York JFK', 'SK22', '7B', '22'),
];
$map = map($list)           // create Map
    ->filter()              // remove empty values
    ->ksort()                // sort elements
;
$map->each(function($transport) {
    echo "$transport\n";
});
echo "You have arrived at your final destination.\n";
