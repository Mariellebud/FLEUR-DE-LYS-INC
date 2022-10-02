<?php

namespace App\Http\Controllers\contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;


class ContactController extends Controller
{
    public function envoi()
    {
        # code...
        $cat= category ::  all();
        return view('envoi',compact('cat'));
    }
    public function sendmail(Request $request)
    {
        $data=[
            'name'=>$request->name,
            'email'=>$request->email,
            'message'=>$request->message,
        ];
        Mail:: to('bud.marielle@gmail.com')->send(new ContactMail($data));
        Session :: flash ('message','merci pour votre email');
        //Alert:: success('Message envoyé','votre message a bien été envoyé avec succes');

        return back()->with('insert',' message a été envoyé avec succes');
    }
}
