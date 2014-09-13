<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('eventos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('usuario_id')->unsigned();
			$table->string('titulo');
			$table->string('lugar');
			$table->string('ciudad');
			$table->text('descripcion');
			$table->dateTime('fecha_inicio');
			$table->dateTime('fecha_fin');
			//$table->string('imagen');
			$table->tinyInteger('premium');
			$table->tinyInteger('habilitar');
			$table->timestamps();
		});
		
		Schema::table('eventos', function(Blueprint $table) {
			$table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('eventos');
	}

}
