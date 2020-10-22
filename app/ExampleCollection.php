<?php

namespace App;

class ExampleCollection
{
    public function example()
    {
        $data = [
            [0 => ['array1']],
            [1 => ['array2']],
            [3, 4, 5]
        ];

        return collect($data)->collapse(); // collapse
    }
}
