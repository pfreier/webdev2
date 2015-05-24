<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpamlistsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('spamlists', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->integer('emailID')->unsigned();
			$table->integer('dozentID')->unsigned();
		});
		
		Schema::table('spamlists', function($table)
		{
			$table->foreign('emailID')->references('id')->on('emails');
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
		Schema::drop('spamlists');
	}

}
