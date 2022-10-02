<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Clothe;
use App\Models\category;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function admin()
    {
        return view ('admins');
    } 
    
}
