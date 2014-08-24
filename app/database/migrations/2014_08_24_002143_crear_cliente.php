<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearCliente extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cliente',function($tabla){
			$tabla->increments('id');
			$tabla->string('nombres',50);
			$tabla->string('apellidos',50);
			$tabla->string('direccion',150);
			$tabla->string('telefono',20);
			$tabla->string('email',30);
			$tabla->integer('id_tipo_documento');
			$tabla->timestamps();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cliente');
		//
	}

}
