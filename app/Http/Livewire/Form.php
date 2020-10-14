<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Form extends Component
{
    public $name;
    public $message;
    public $material_status;
    public $colors = [];
    public $fruite;

    public function render()
    {
        return view('livewire.form');
    }
}
