<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductCategory extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('product_category', function(Blueprint $table)
		{
			$table->increments('id')->unsigned();
			$table->string('name')->unsigned();
			$table->text('description')->unsigned();
			$table->string('img')->unsigned();
			$table->tinyInteger('featured');
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
		Schema::drop('product_category');
	}

}