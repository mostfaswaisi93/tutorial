<?php

namespace App;

class ExampleCollection
{
    public function example()
    {
        // $data = [10, 20, 30];

        $data = [
            ['price' => 10000, 'tax' => 500, 'active' => true],
            ['price' => 20000, 'tax' => 700, 'active' => false],
            ['price' => 30000, 'tax' => 900, 'active' => true]
        ];

        // return collect($data)->average('price'); 
        return collect($data)->average(function ($value) { // average
            if (!$value['active']) {
                return null;
            }
            return $value['price'] + $value['tax'];
        });

        return collect($data)->max(function ($value) { // max
            if (!$value['active']) {
                return null;
            }
            return $value['price'] + $value['tax'];
        });

        return collect($data)->median('price'); // median  

        return collect($data)->min(function ($value) { // min
            if (!$value['active']) {
                return null;
            }
            return $value['price'] + $value['tax'];
        });
    }
}
