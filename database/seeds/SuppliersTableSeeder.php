<?php

use Illuminate\Database\Seeder;

use Bakesale\Supplier;

class SuppliersTableSeeder extends Seeder {

    public function run()
    {
    	Supplier::create([
			'first_name' => 'Jason',
			'last_name' => 'Fryd',
			'company' => 'Product Holdings Ltd',
			'bio' => 'Biggest suppliers of assorted food ingredients'
		]);
    }

}