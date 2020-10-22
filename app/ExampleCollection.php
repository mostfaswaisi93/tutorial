<?php

namespace App;

class ExampleCollection
{
    public function example()
    {
        $keys = collect(['column1', 'column1']);

        return $keys->combine([ // combine
            ['value1' => 123, 'value3' => 789],
            ['value2' => 456]
        ]);

        $data = collect(['key2' => 'value1']);

        return $data->concat(['key1' => 'value2']); // concat
    }
}
