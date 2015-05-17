<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('setting', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->bigInteger('user_id');
			$table->string('type')->nullable();
			$table->boolean('subscribe_to_public_qwotes')->default(false)->nullable();
			$table->boolean('subscribe_to_my_qwotes')->default(true)->nullable();
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
		Schema::drop('setting');
	}

}
