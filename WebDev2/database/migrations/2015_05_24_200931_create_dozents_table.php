<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDozentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dozents', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('vorname');
			$table->string('nachname');
			$table->integer('userID')->unsigned();
			$table->timestamps();
		});
		
		Schema::table('dozents', function($table)
		{
			$table->foreign('userID')->references('id')->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dozents');
	}

}
