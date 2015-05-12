<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTerminsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('termins', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->timestamp('datum');
			$table->integer('dauer');
			$table->string('vorname');
			$table->string('nachname');
			$table->string('kurzBetreff', 40);
			$table->string('langbetreff', 100);
			$table->boolean('besteatigt');
			$table->string('tokenCode', 20);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('termins');
	}

}
