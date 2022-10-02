<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clothe extends Model
{
    use HasFactory;
    protected $table = "clothes";
    protected $fillable =[
        'libellep',
        'description',
        'prix',
        'qte',
        'photo',
        'categori_id',

    ];
    public function category()
    {
        return $this->belongsTo(category::class, 'categori_id','id');
    }
}
