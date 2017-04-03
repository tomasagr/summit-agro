<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Award extends Model {

	protected $table = 'awards';
	protected $fillable = ['name', 'points', 'stock', 'image', 'level_id'];
	public $timestamps = true;

	public function level() {
		return $this->belongsTo(Levels::class, 'level_id');
	}
}