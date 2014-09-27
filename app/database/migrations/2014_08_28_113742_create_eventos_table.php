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
			$table->integer('usuario')->unsigned();
			$table->dateTime('fecha')->nullable();
			$table->text('titulo');
			$table->string('imagen');
			$table->date('fecha_evento')->nullable();
			$table->text('contenido');
			$table->timestamps();
		});
		
		Schema::table('eventos', function(Blueprint $table) {
			$table->foreign('usuario')->references('id')->on('usuarios')->onDelete('cascade');
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
