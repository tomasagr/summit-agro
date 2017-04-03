<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('first_name');
			$table->string('last_name');
			$table->string('dni');
			$table->string('email');
			$table->string('phone');
			$table->string('address');
			$table->string('password');
			$table->string('cuit');
			$table->string('agronomy');
			$table->enum('agronomy_type', array('casa', 'sucursal'))->nullable();
			$table->timestamp('birthday')->nullable();
			$table->string('size')->nullable();
			$table->string('civil_status')->nullable();
			$table->timestamp('aniversario')->nullable();
			$table->integer('childrens')->nullable();
			$table->string('sports')->nullable();
			$table->string('hobby')->nullable();
			$table->string('team')->nullable();
			$table->enum('type', array('user', 'admin'));
			$table->integer('points')->default(0);
			$table->string("remember_token")->nullable();
		});
	}

	public function down()
	{
		Schema::drop('users');
	}
}