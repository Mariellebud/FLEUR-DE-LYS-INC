<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class livrer extends Model
{
    use HasFactory;
    protected $table = "livrers";
    protected $fillable =[
        'quartier',
        'nom',
        'prenom',
        'adresse',
        'ville',
        'email',
        'phone'


    ];
}
