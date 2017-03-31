<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAwardsTable extends Migration {

	public function up()
	{
		Schema::create('awards', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->integer('stock');
			$table->integer('points');
			$table->string('image')->default('images/default.png');
		});
	}

	public function down()
	{
		Schema::drop('awards');
	}
}