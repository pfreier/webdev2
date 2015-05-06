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
			$table->unsignedInteger('sprechstundenID');
			$table->foreign('sprechstundenID')->references('id')->on('Sprechstunde');
			$table->unsignedInteger('terminID');
			$table->foreign('teminID')->references('id')->on('termin');
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
		Schema::drop('wartelistes');
	}

}
