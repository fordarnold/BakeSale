<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder {

    public function run()
    {
        Product::create([
			'category_id' => dechex( mt_rand(100000000, 999999999) ),
			'name' 	=> 'Marble Cake',
			'vendor' 	=> 'La Galette Inc',
			'unit_price' => 1000.00,
			'wholesale_price' => 800.00,
			'currency_id' => 1,
			'category_id' => 1,
			'stock_minimum' => 50,
			# placeholder photos
			'photos' => '{"http://placephant.com/200/400", "http://placephant.com/200"}'
		]);
    }

}