<?php

namespace App;

use App\Product;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Solicitude extends Model {

	protected $table = 'solicitudes';
	protected $fillable = ['invoice_number',
													'date', 'cuit',
												 'award_id', 'points',
												 'user_id', 'invoice_image',
												 'code_id', 'points', 'status'];
	public $timestamps = true;

	public function products()
	{
		return $this->belongsToMany(Product::class, 'product_solicitude', 'solicitude_id', 'product_id')->withPivot('quanty');
	}

	public function setDateAttribute($value)
	{
		$this->attributes['date'] = Carbon::parse($value);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}