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
			$table->timestamp('datum');
			$table->integer('dauer');
			$table->integer('uhrzeit');
			$table->string('raum');
			$table->integer('intervall');
			$table->integer('dozentID')->unsigned();
		});
		
		Schema::table('sprechstundes', function($table)
		{
			$table->foreign('dozentID')->references('id')->on('dozents');
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
