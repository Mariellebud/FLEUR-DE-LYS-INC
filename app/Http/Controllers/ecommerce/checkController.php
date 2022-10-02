<?php

namespace App\Http\Controllers\ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\livrer;
use App\Models\category;
use Illuminate\Support\Facades\Mail;


use App\Mail\livraisonMail;


use Cart;
use Session;

class checkController extends Controller
{
    public function pay()
    {
        $cat= category ::  all();

        return view('proceed',compact('cat'));
    }
    public function ship(Request $request)
    {
        
        $data=array();
        $data['quartier']=$request->quartier;
        $data['nom']=$request->nom;
        $data['prenom']=$request->prenom;
        $data['adresse']=$request->adresse;
        $data['ville']=$request->ville;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
      // $id=livrer :: insertGetId($data);
       //$data=[
        //'nom'=>$request->nom,
        //'prenom'=>$request->prenom,
        //'ville'=>$request->ville,
        //'adresse'=>$request->adresse,
        //'email'=>$request->email,
        //'phone'=>$request->phone,
        //'quartier'=>$request->quartier,

   // ];
       //Session :: put ('id',$id);

       $cartCollection=Cart :: getContent();
        $cart_array=$cartCollection->toArray();
        Mail:: to('bud.marielle@gmail.com')->send(new livraisonMail($data));

        Session :: flash ('message','merci pour votre email');

        return redirect()->back()->with('insert','Merci d\'avoir choisit fleur de lys votre commande arrivera dans 3 jours');;
    }
    public function order()
    {
        $cartCollection=Cart :: getContent();
        $cart_array=$cartCollection->toArray();
        //Mail:: to('bud.marielle@gmail.com')->send(new ContactMail($data));

        return view('payment',compact('cart_array'));
    }
}
