<?php

use Illuminate\Database\Seeder;

use Bakesale\Product;

class ProductsTableSeeder extends Seeder {

    public function run()
    {
        Product::create([
        	'category_id' => 1,
        	'name' 	=> 'Marble Cake',
        	'vendor' => 'La Galette Inc',
        	'description' => 'The best type of cake on the planet',
        	'photo' => 'http://placephant.com/200',
        	'unit_price' => 500.0,
        	'currency_id' => 1,
        	'min_stock' => 10
		]);

		Product::create([
        	'category_id' => 2,
        	'name' 	=> 'Salami Sandwich',
        	'photo' => 'http://placephant.com/300',
        	'unit_price' => 800.0,
        	'currency_id' => 1
		]);

		Product::create([
        	'category_id' => 4,
        	'name' 	=> 'Espresso',
        	'description' => 'Strong coffee',
        	'photo' => 'http://placephant.com/200',
        	'unit_price' => 500.0,
        	'currency_id' => 1
		]);

        Product::create([
            'category_id' => 6,
            'name'  => 'Sweet and sour pork',
            'vendor'  => 'The Culinary Suite',
            'description' => 'Experience the amazing taste of one of Asias most popular dishes',
            'photo' => 'http://lorempixel.com/200/400',
            'unit_price' => 500.0,
            'currency_id' => 1
        ]);
    }

}