<?php

use Illuminate\Database\Seeder;

use Bakesale\Supplier;

class SuppliersTableSeeder extends Seeder {

    public function run()
    {
    	// this supplier has login credentials
    	// and can login to the Suppliers section of the app
    	Supplier::create([
    		'user_id' => 5,
			'first_name' => 'Jason',
			'last_name' => 'Fryd',
			'company' => 'Product Holdings Ltd',
			'bio' => 'Biggest suppliers of assorted food ingredients',
			'photo' => 'http://lorempixel.com/150/150'
		]);

    	// this supplier has no login credentials
    	// but is important enough to be listed as a Supplier
		Supplier::create([
			'first_name' => 'Serial',
			'last_name' => 'Entrepreneur',
			'company' => 'Trust Industries Ltd',
			'bio' => 'Your trusted suppliers and manufacturers',
		]);
    }

}