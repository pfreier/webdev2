<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWartelistesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wartelistes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->integer('sprechstundeID')->unsigned();
			$table->integer('terminID')->unsigned();

		});
		
		Schema::table('wartelistes', function($table)
		{
			$table->foreign('terminID')->references('id')->on('termins');
			$table->foreign('sprechstundeID')->references('id')->on('sprechstundes');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('wartelistes');
	}

}
