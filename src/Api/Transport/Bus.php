<?php

namespace Api\Transport;

class Bus extends TransportAbstract
{
    public function __construct(string $from, string $to)
    {
        parent::__construct('bus', $from, $to);
    }
}
