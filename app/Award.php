<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Award extends Model {

	protected $table = 'awards';
	protected $fillable = ['name', 'points', 'stock', 'image'];
	public $timestamps = true;

}