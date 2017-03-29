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
			$table->integer('award_id');
			$table->integer('points');
			$table->boolean('status');
			$table->string('invoice_image');
		});
	}

	public function down()
	{
		Schema::drop('solicitudes');
	}
}