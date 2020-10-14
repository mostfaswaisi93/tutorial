<?php

namespace App\Http\Livewire;

use Livewire\Component;

class User extends Component
{
    public function render()
    {
        return <<<'blade'
            <div>
            <h1>This is a User Component</h1>
            {{-- In work, do what you enjoy. --}}
            </div>
        blade;
    }
}
