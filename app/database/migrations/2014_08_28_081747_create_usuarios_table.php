<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuarios', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('email');
			$table->string('password', 64);
			$table->string('nombre');
			$table->string('telefono', 30);
			$table->string('celular', 30);
			$table->string('nextel', 30);
			$table->string('imagen');
			$table->timestamps();
			$table->rememberToken();
			
			$table->unique('email');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('usuarios');
	}

}
