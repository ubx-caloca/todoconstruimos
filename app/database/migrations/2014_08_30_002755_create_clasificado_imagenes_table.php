<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClasificadoImagenesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clasificado_imagenes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('clasificado_id')->unsigned();
			$table->string('nombre_imagen');
			$table->timestamps();
		});
		
		Schema::table('clasificado_imagenes', function(Blueprint $table) {
			$table->foreign('clasificado_id')->references('id')->on('clasificados')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('clasificado_imagenes');
	}

}
