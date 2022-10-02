<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartCompoment extends Component
{
    public function render()
    {
        return view('livewire.cart-compoment')->layout('layouts.commerce');
    }
}
