<?php

namespace App;

use App\Award;
use Illuminate\Database\Eloquent\Model;

class Levels extends Model {

	protected $table = 'levels';
	protected $fillable = ['points'];
	public $timestamps = true;

	public function awards()
	{
		return $this->hasMany(Award::class, 'level_id');
	}
}