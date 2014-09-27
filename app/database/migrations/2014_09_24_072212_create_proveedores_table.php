<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('proveedores', function(Blueprint $table)
		{
		$table->increments('id');
		$table->integer('proveedor_tipo_idproveedor_tipo')->unsigned();
		$table->integer('usuario_id')->unsigned();
		$table->text('nombre_usuario');
		$table->string('nombre', 250);
		$table->string('direccion', 250)->nullable();
		$table->string('telefono', 250)->nullable();
		$table->string('facebook', 250)->nullable();
		$table->string('twitter', 250)->nullable();
		$table->string('otro_sns', 250)->nullable();
		$table->string('longitud', 250)->nullable();
		$table->string('latitud', 250)->nullable();
		$table->boolean('habilitar');
		$table->timestamps();
		});
		
		Schema::table('proveedores', function(Blueprint $table) {
			$table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
			$table->foreign('proveedor_tipo_idproveedor_tipo')->references('id')->on('proveedor_tipo')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('proveedores');
	}

}
