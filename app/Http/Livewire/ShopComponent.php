<?php

namespace App\Http\Livewire;
use App\Models\Clothe;

use Livewire\Component;
use Livewire\WithPagination;


class ShopComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $product = Clothe :: paginate(12);

        return view('admin',['clothes'=>$product]);
    }
}
