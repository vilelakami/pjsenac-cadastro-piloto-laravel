<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable([
    'nome',
    'idade',
    'sexo',
    'altura',
    'peso'
])]
class Piloto extends Model
{
    //
}
