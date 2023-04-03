<?php

use Api\Trip;
use Api\Transport\Train;
use Api\Transport\AirportBus;
use Api\Transport\Plane;

require_once __DIR__ . '/vendor/autoload.php';


// Sort or not...
$options = getopt('', ['sort']);
$sort = isset($options['sort']);

// Data input
$input = [
    'c' => new Plane('Gerona Airport', 'Stockholm', 'SK455','3A', '45B', '344'),
    'b' => new AirportBus('Barcelona', 'Gerona Airport'),
    'a' => new Train('Madrid', 'Barcelona', '78A', '45B'),
    'd' => new Plane('Stockholm', 'New York JFK', 'SK22', '7B', '22'),
    null, // empty value filtered later on
];

// API
(new Trip())->display($input, $sort);
