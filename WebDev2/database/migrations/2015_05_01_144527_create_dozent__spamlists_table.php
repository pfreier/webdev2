<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDozentSpamlistsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dozent__spamlists', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('emailID')->unsigned();
			$table->integer('dozentID')->unsigned();
			$table->timestamps();
		});

		Schema::table('dozent__spamlists', function($table)
		{
			
			$table->foreign('dozentID')->references('id')->on('Dozent');
			$table->foreign('emailID')->references('id')->on('Email');
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dozent__spamlists');
	}

}
