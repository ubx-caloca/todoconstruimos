<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blog', function(Blueprint $table)
		{
		$table->increments('id');
		$table->integer('usuario')->unsigned();
		$table->date('fecha')->nullable();
		$table->text('titulo')->nullable();
		$table->text('imagen')->nullable();
		$table->text('contenido')->nullable();
		$table->timestamps();
		});
		
		Schema::table('blog', function(Blueprint $table) {
			$table->foreign('usuario')->references('id')->on('usuarios')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('blog');
	}

}
