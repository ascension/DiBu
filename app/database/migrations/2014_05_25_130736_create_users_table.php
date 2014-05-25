<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->bigInteger('facebook_id')->nullable();
			$table->bigInteger('google_id')->nullable();
			$table->bigInteger('linkedin_id')->nullable();
			$table->string('first_name',48);
			$table->string('last_name',48);
			$table->string('email');
			$table->boolean('verified')->default(false);
			$table->string('remember_token',100)->nullable();
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
		Schema::drop('users');
	}

}
