<?php

namespace App\Http\Controllers\ecommerce;

use App\Http\Controllers\Controller;
use App\Models\Clothe;
use App\Models\category;
use RealRashid\SweetAlert\Facades\Alert;

use Cart;

//use Gloudemans\Shoppingcart\Facades\Cart;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function panier(Request $request)
        {
            $qte=$request->quantity;
            $id=$request->id;
            $product=Clothe :: where('id',$id)->first();
            $data['quantity']=$qte;
            $data['id']=$product->id;
            $data['name']=$product->libellep;
            //$data['description']=$product->description;
            $data['price']=$product->prix;
            $data['attributes']=$product->photo;
            //$data['category_id']=[$product->category_id];

            Cart :: add($data);
            cartArray();
            Alert:: success('Ajout au panier','Le produit a été ajouté à votre panier');

            return redirect()->back()->with('insert','Le produit a été ajouté à panier');

        }
        public function display(){
            //$cart_array=cartArray();
            $cat= category ::  all();

            return view('carte',compact('cat'));
        }
        public function delete($id)
        {
            Cart :: remove($id);
            return redirect()->back();
        }
}
