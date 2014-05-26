<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodItmesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('food_items', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('description');
			$table->text('brand')->nullable();
			$table->text('size')->nullable();
			$table->integer('carbs');
			$table->integer('serving_size')->nullable();
			$table->string('barcode')->nullable();
			$table->integer('user_id');
			$table->integer('meal_id')->nullable();
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
		Schema::drop('food_items');
	}

}
