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
			$table->timestamps();
			$table->integer('emailID')->unsigned();
			$table->integer('dozentID')->unsigned();
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
