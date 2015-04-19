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
			$table->float('unit_cost')->nullable(); // if product can be purchased from supplier
			$table->float('unit_price');
			$table->integer('currency_id')->default(1);
			$table->integer('min_stock')->default(5);

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
