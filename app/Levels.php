<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Levels extends Model {

	protected $table = 'levels';
	protected $fillable = ['points'];
	public $timestamps = true;
}