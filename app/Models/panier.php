<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class panier extends Model
{
    use HasFactory;
    protected $table = "paniers";
    protected $fillable =[
        'user_id',
        'prod_id',
        'qte',
        

    ];
}
