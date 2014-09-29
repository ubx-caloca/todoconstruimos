<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTieneRolTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuario_tiene_rol2', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('usuario_id')->unsigned();
			$table->integer('rol_id')->unsigned();
			$table->timestamps();
			
		});
		
		Schema::table('usuario_tiene_rol2', function(Blueprint $table) {
			$table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
			$table->foreign('rol_id')->references('id')->on('usuario_roles')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('usuario_tiene_rol2');
	}

}
