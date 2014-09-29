<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventoImagenesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('evento_imagenes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('evento_id')->unsigned();
			$table->text('imagen');
			$table->text('texto');
			$table->timestamps();
		});
		
		Schema::table('evento_imagenes', function(Blueprint $table) {
			$table->foreign('evento_id')->references('id')->on('eventos')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('evento_imagenes');
	}

}
