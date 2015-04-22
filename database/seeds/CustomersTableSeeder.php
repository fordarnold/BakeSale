<?php

use Illuminate\Database\Seeder;

use Bakesale\Customer;

class CustomersTableSeeder extends Seeder {

    public function run()
    {
        Customer::create([
			'user_id' => 2,
			'first_name' => 'John',
			'last_name' => 'Cena',
			'company' => 'Random Company Ltd',
			'bio' => 'World champion wrestler'
		]);

		Customer::create([
			'user_id' => 3,
			'first_name' => 'Jack',
			'last_name' => 'Doe',
			'company' => 'Random Inc',
			'bio' => 'Unknown personnel'
		]);
    }

}