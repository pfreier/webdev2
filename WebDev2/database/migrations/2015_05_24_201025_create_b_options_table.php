<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBOptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('b_options', function(Blueprint $table)
		{
			$table->increments('id');
			$table->boolean('01');
			$table->boolean('02');
			$table->boolean('03');
			$table->boolean('04');
			$table->integer('dozentID')->unsigned();
			$table->timestamps();
		});
		
		Schema::table('b_options', function($table)
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
		Schema::drop('b__optionens');
	}

}