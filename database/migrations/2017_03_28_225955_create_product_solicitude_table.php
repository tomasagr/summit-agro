<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductSolicitudeTable extends Migration {

	public function up()
	{
		Schema::create('product_solicitude', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('product_id');
			$table->integer('solicitude_id');
		});
	}

	public function down()
	{
		Schema::drop('product_solicitude');
	}
}