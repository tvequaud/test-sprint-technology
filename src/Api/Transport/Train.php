<?php

namespace Api\Transport;

class Train extends TransportAbstract
{
    public function __construct(string $from, string $to, string $number = null, string $seat = null)
    {
        parent::__construct('train', $from, $to, $number, $seat);
    }
}
