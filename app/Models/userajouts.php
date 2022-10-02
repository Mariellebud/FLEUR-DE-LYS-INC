<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userajouts extends Model
{
    use HasFactory;
    protected $fillable=[
'prenom',
'phone',
'ville',
'arron',
'quartier',
'adresse',
'user_id',


    ];
}
