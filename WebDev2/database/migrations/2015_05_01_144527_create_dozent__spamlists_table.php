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
			$table->unsignedInteger('emailID');
			$table->foreign('emailID')->references('id')->on('Email');
			$table->unsignedInteger('dozentID');
			$table->foreign('dozentID')->references('id')->on('Dozent');
			$table->timestamps();
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
