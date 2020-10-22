<?php

namespace App;

class ExampleCollection
{
    public function example()
    {
        return collect([1, 2, 3, 4, 5])
            ->contains(function ($value, $key) {
                return $value > 4;
            }); // contains

        return collect(["  0015"])
            ->containsStrict(' 15')->first(); // containsStrict
    }
}
