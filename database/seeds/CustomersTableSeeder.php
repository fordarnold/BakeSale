<?php

use Illuminate\Database\Seeder;

use Bakesale\Customer;

class CustomersTableSeeder extends Seeder {

    public function run()
    {
    	// this customer has login credentials
    	// and can login to the Webstore section of the app
        Customer::create([
			'user_id' => 4,
			'first_name' => 'John',
			'last_name' => 'Cena',
			'company' => 'Random Company Ltd',
			'bio' => 'World champion wrestler',
			'photo' => 'http://lorempixel.com/150/150',
		]);

        // this customer has no login credentials
    	// but is important enough to be listed as a Customer
		Customer::create([
			'first_name' => 'Jack',
			'last_name' => 'Doe',
			'company' => 'Random Inc',
			'bio' => 'Unknown personnel',
		]);
    }

}