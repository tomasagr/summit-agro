<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agronomia extends Model
{
    protected $table = 'agronomias';
    protected $fillable = ['cuit', 'nombre'];
}
