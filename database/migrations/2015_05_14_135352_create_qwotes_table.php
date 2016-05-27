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
			$table->bigIncrements('id');
			$table->bigInteger('user_id');
			$table->longText('qwote');
			$table->string('author');
			$table->string('type');
			$table->boolean('public')->default(false)->nullable();
			$table->boolean('vetted')->default(false)->nullable();
			$table->nullableTimestamps();
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
