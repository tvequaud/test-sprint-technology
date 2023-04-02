<?php

namespace Api\Transport;

abstract class TransportAbstract
{
    protected string $label;

    protected string $from;

    protected string $to;

    protected string $type;

    protected ?string $number;

    protected ?string $seat;


    public function __construct(string $label, string $from, string $to, string $number = null, string $seat = null)
    {
        $this->label = $label;
        $this->from = $from;
        $this->to = $to;
        $this->number = $number;
        $this->seat = $seat;
    }

    public function __toString(): string
    {
        $toString = "Take $this->label ";

        if (!\is_null($this->number)) {
            $toString .= "$this->number ";
        }

        $toString .= "from $this->from to $this->to. ";
        if (\is_null($this->seat)) {
            $toString .= "No seat assignment.";
        } else {
            $toString .= "Sit in seat $this->seat.";
        }

        return $toString;
    }
}
