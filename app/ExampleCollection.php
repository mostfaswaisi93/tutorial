<?php

namespace App;

class ExampleCollection
{
    public function example()
    {
        $collections = collect([1, 2, 3]);

        return $collections->diff([2, 4, 6]); // diff 

        $collections = collect([10 => 'apple', 20 => 'banana']);

        return $collections->diffAssoc([30 => 'pears', 20 => 'banana']); // diffAssoc 
        return $collections->diffKeys([30 => 'pears', 20 => 'bananas'])->first(); // diffKeys 
    }
}
