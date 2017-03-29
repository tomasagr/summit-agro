<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLevelsTable extends Migration {

	public function up()
	{
		Schema::create('levels', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('code');
			$table->string('points');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('levels');
	}
}