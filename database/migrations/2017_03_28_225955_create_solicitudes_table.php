<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSolicitudesTable extends Migration {

	public function up()
	{
		Schema::create('solicitudes', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('invoice_number');
			$table->datetime('date');
			$table->string('cuit');
			$table->integer('user_id');
			$table->string('invoice_image')->default('');
		});
	}

	public function down()
	{
		Schema::drop('solicitudes');
	}
}