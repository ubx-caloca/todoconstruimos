<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCobrosTipoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cobro_tipo', function(Blueprint $table)
		{
		$table->increments('id');
		$table->string('tipo', 250);
		$table->text('descripcion')->nullable();
		$table->float('precio')->nullable();
		$table->integer('diasVigencia')->nullable();
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
		Schema::drop('cobro_tipo');
	}

}
