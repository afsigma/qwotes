<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQwotesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('qwotes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->text('qwote');
			$table->string('author');
			$table->string('type');
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
		Schema::drop('qwotes');
	}

}
