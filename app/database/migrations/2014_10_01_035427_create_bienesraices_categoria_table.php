<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBienesraicesCategoriaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bienesraices_categorias', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('categoria');
			$table->text('descripcion');
			$table->string('icono');			
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bienesraices_categorias');
	}

}
