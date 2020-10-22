<?php

namespace App;

class ExampleCollection
{
    public function example()
    {
        $data = [
            1, 2, 3, 4, 5, 6, 7
        ];

        return collect($data)->chunk(3); // chunk
    }
}
