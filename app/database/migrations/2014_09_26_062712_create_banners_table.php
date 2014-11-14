<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('banners', function(Blueprint $table)
		{
		$table->increments('id');
		$table->integer('usuario_id')->unsigned();
		$table->string('banner_img', 250);
		$table->text('seccion')->nullable();
		$table->text('link')->nullable();
		$table->tinyInteger('habilitar');
		$table->tinyInteger('solicitar_habilitar');
		$table->tinyInteger('no_primer_cobro')->default(0);
		$table->timestamps();
		});
		
		Schema::table('banners', function(Blueprint $table) {
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
		Schema::drop('banners');
	}

}
