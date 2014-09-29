<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedoresTipoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up(){
		Schema::create('proveedor_tipo', function(Blueprint $table)
		{
		$table->increments('id');
		$table->string('tipo', 45)->nullable();
		$table->string('icono', 255)->nullable();
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
		Schema::drop('proveedor_tipo');
	}

}
