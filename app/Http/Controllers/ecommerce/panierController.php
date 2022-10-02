<?php

namespace App\Http\Controllers\ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clothe;
//use App\Models\panier;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;

class panierController extends Controller
{
    public function panier(Request $request)
    {
        return view('/home');
        /*$prod=Clothe:: findOrFail($request->input(key:'id'));
        Cart :: add(
            $prod->id,
            $prod->libellep,
            $request->input(key:'quantity'),
            $prod->prix /100,
        );
        return redirect('ecommerce');//->with('status','produit a été ajouté au panier');
        */
    }
}
