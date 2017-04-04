<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cupon extends Model
{
    protected $table = 'cupons';
    protected $fillable = ['code', 'points'];
}
