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
			$table->boolean('option1');
			$table->boolean('option2');
			$table->boolean('option3');
			$table->boolean('option4');
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