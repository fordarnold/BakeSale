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
			$table->integer('points')->default(0); // who doesnt love loyalty points
			$table->string('category')->nullable(); // dont know how to deal with these yet
			$table->integer('customer_id')->unique(); // must belong to customer
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
