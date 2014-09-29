<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedorDetalleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('proveedor_detalle', function(Blueprint $table)
		{
		$table->increments('id');
		$table->integer('proveedores_idproveedor')->unsigned();
		$table->integer('proveedores_proveedor_tipo_idproveedor_tipo')->unsigned()->nullable();
		$table->text('introduccion')->nullable();
		$table->text('descripcion')->nullable();
		$table->text('vision')->nullable();
		$table->text('productos')->nullable();
		$table->text('imagen_intro')->nullable();
		$table->text('imagen_descripcion')->nullable();
		$table->text('imagen_vision')->nullable();
		$table->timestamps();
		});
		
		Schema::table('proveedor_detalle', function(Blueprint $table) {
			$table->foreign('proveedores_idproveedor')->references('id')->on('proveedores')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('proveedor_detalle');
	}

}
