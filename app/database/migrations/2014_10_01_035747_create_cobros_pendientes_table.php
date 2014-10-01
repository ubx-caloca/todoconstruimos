<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCobrosPendientesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cobros_pendientes', function(Blueprint $table)
		{
		$table->increments('id');
		$table->integer('cobro_id')->unsigned();
		$table->datetime('fecha')->nullable();
		$table->string('metodoPago', 250)->nullable();
		$table->text('referenciaPago')->nullable();	
		$table->text('cobro_concepto')->nullable();	
		$table->timestamps();
		});
		
		Schema::table('cobros_pendientes', function(Blueprint $table) {
			$table->foreign('cobro_id')->references('id')->on('cobros')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cobros_pendientes');
	}

}
