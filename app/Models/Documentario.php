<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documentario extends Model
{
    use HasFactory;

    protected $fillable = [       
        'nome',
        'categoria',            
];
}
