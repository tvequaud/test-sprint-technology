<?php

namespace Api;

class Trip
{
    public function display(array $data, bool $sort)
    {
        $map = map($data)
            ->filter()      // remove empty values
        ;

        if ($sort === true) {
            $map->ksort();       // sort elements
        }

        $map->each(function($transport) {
            echo "$transport\n";
        });

        if ($sort === true) {
            echo "You have arrived at your final destination.\n";
        }
    }
}
