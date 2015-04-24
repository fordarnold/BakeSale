<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoyaltiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('loyalties', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('uid')->unique(); // unique code for loyalty card
			$table->bigInteger('points')->default(0); // who doesnt love loyalty points :)
			$table->string('category')->default('bronze'); // now I know :)
			$table->integer('customer_id'); // must belong to customer
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
		Schema::drop('loyalties');
	}

}
