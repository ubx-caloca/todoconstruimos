<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCobrosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cobros', function(Blueprint $table)
		{
		$table->increments('id');
		$table->integer('tipo_id')->unsigned();
		$table->integer('usuario_id')->unsigned();
		$table->date('fechaExpiracion')->nullable();
		$table->string('estado', 40)->nullable();
		$table->string('datosAdicionales', 250)->nullable();
		$table->timestamps();
		});
		
		Schema::table('cobros', function(Blueprint $table) {
			$table->foreign('tipo_id')->references('id')->on('cobro_tipo')->onDelete('cascade');
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
		Schema::drop('cobros');
	}

}
