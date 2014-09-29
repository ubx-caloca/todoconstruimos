<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClasificadosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clasificados', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('titulo');
			$table->text('descripcion');
			//$table->string('imagen');
			$table->tinyInteger('premium');
			$table->tinyInteger('solicitar_premium');
			$table->integer('categoria_id')->unsigned();
			$table->integer('usuario_id')->unsigned();
			$table->float('precio');
			$table->string('moneda');
			$table->dateTime('fecha_publicacion');
			$table->tinyInteger('habilitar');
			$table->timestamps();	
			
		});
		
		 Schema::table('clasificados', function(Blueprint $table) {
			$table->foreign('categoria_id')->references('id')->on('clasificado_categorias')->onDelete('cascade');
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
		Schema::drop('clasificados');
	}

}
