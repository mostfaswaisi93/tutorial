<?php

namespace App;

class ExampleCollection
{
    public function example()
    {
        $data = [
            1,
            2 => [5, 6],
            3,
            4,
            'seven'
        ];

        return collect($data)->count(); // count

        // $collections = collect([1, 2]);
        $collections = collect(['Mustang', 'GT', 'F150']);
        // return $collections->crossJoin(['a', 'b'], ['c', 'd']);
        return $collections->crossJoin([
            ['automatic', 'manual'],
            ['blue', 'black', 'white', 'yellow', 'gray'],
            [2018, 2019, 2020]
        ]); // crossJoin

    }
}
