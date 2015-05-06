<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBOptionensTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('b__optionens', function(Blueprint $table)
		{
			$table->increments('id');
			$table->boolean('01');
			$table->boolean('02');
			$table->boolean('03');
			$table->boolean('04');
			$table->unsignedInteger('dozentID');
			$table->timestamps();
		});

		Schema::table('b_optionens', function($table)
		{
			$table->foreign('dozentID')->references('id')->on('Dozent');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('b__optionens');
	}

}
