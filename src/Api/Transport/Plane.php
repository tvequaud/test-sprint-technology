<?php

namespace Api\Transport;

class Plane extends TransportAbstract
{
    private ?string $gate;

    private ?string $baggage;


    public function __construct(string $from, string $to, string $number, string $seat, string $gate = null, string $baggage = null)
    {
        $this->gate = $gate;
        $this->baggage = $baggage;
        parent::__construct('flight', $from, $to, $number, $seat);
    }


    public function __toString(): string
    {
        if (\is_null($this->baggage)) {
            $baggage =  "Baggage will we automatically transferred from your last leg";
        } else {
            $baggage = "Baggage drop at ticket counter $this->baggage";
        }

        return "From $this->from, take $this->label $this->number to $this->to. Gate $this->gate, seat $this->seat. $baggage.";
    }
}
