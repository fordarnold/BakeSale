<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unique(); // must be an authorized user
			$table->string('first_name');
			$table->string('last_name');
			$table->string('company')->nullable();
			$table->text('bio')->nullable();
			$table->integer('loyalty_id')->unique()->nullable(); // can be enrolled in loyalty program
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
		Schema::drop('customers');
	}

}
