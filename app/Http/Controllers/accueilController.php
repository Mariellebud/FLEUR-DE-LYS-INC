<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class accueilController extends Controller
{
    //
    /**
     * Display a listing of the ressource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index()
     {
        $accueil= accueil :: all();
        return Iner
     }
}
