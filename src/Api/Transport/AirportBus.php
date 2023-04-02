<?php

namespace Api\Transport;

class AirportBus extends TransportAbstract
{
    public function __construct(string $from, string $to)
    {
        parent::__construct('the airport bus', $from, $to);
    }
}
