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
			$table->foreign('emailID')->references('id')->on('emails');
			$table->foreign('dozentID')->references('id')->on('dozenten');
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