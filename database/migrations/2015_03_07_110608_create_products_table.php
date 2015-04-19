<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table) 
		{
			$table->increments('id');

			$table->integer('category_id');
			$table->string('name');
			$table->string('vendor')->nullable();
			$table->text('description')->nullable();
			$table->string('photo')->nullable();
			$table->float('unit_price');
			$table->integer('currency_id');
			$table->float('batch_price')->nullable();
			$table->float('batch_quantity')->nullable();
			$table->string('batch_type')->nullable();

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
		Schema::drop('products');
	}

}
