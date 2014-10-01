<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBienesraicesImagenesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bienesraices_imagenes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('bienesraices_id')->unsigned();
			$table->string('nombre_imagen');
			$table->timestamps();
		});
		
		Schema::table('bienesraices_imagenes', function(Blueprint $table) {
			$table->foreign('bienesraices_id')->references('id')->on('bienesraices')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bienesraices_imagenes');
	}

}
