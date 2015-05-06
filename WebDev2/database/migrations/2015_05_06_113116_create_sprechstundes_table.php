<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSprechstundesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sprechstundes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->foreign('dozentId')->references('id')->on('Dozent');
			$table->timestamp('datum');
			$table->integer('dauer');
			$table->integer('uhrzeit');
			$table->String('raum');
			$table->integer('intervall');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sprechstundes');
	}

}
