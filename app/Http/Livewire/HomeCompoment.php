<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HomeCompoment extends Component
{
    public function render()
    {
        return view('livewire.home-compoment')->layout('layouts.commerce');
    }
}
