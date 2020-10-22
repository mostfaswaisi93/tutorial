<?php

namespace App;

class ExampleCollection
{
    public function example()
    {
        $collections = collect(['A-43', 'B54', 'B-23', 'A12']);

        $newCollection = $collections->sort(function ($a, $b) {
            $code = str_replace('-', '', $a);
            return ($code < $b) ? -1 : 1;
        }); // sort

        return $newCollection;
    }
}
