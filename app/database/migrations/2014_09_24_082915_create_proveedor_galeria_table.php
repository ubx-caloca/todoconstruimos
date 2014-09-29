<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedorGaleriaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('proveedor_galeria', function(Blueprint $table)
		{
		$table->increments('id');
		$table->integer('proveedores_idproveedor')->unsigned();
		$table->text('imagen')->nullable();
		$table->text('texto')->nullable();
		$table->boolean('premium')->default(0);
		$table->timestamps();
		});
		
		Schema::table('proveedor_galeria', function(Blueprint $table) {
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
		Schema::drop('proveedor_galeria');
	}

}
