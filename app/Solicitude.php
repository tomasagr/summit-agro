<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class Solicitude extends Model {

	protected $table = 'solicitudes';
	protected $fillable = ['invoice_number', 'date', 'cuit',
												 'award_id', 'points', 'user_id', 'invoice_image'];
	public $timestamps = true;

	public function products()
	{
		return $this->belongsToMany(Product::class, 'product_solicitude', 'solicitude_id', 'product_id');
	}
}