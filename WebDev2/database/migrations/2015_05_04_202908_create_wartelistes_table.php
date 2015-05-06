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
			$table->integer('sprechstundenID')->unsigned();
			$table->integer('terminID')->unsigned();
			$table->timestamps();
		});

		Schema::table('wartelistes', function($table)
		{
			$table->foreign('sprechstundenID')->references('id')->on('Sprechstunde');
			$table->foreign('teminID')->references('id')->on('Termin');			
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
