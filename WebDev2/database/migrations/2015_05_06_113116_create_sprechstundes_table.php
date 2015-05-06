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
			$table->integer('dozentID')->unsigned();
			$table->timestamp('datum');
			$table->integer('dauer');
			$table->integer('uhrzeit');
			$table->string('raum');
			$table->integer('intervall');
		});

		Schema::table('sprechstundes', function($table)
		{
			$table->foreign('dozentId')->references('id')->on('Dozent');
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
