<?php

use Illuminate\Database\Seeder;

use Bakesale\Category;

class CategoriesTableSeeder extends Seeder {

    public function run()
    {
        Category::create([
			'name' 	=> 'Pastries',
			'description' => 'Cakes, cookies, et al.'
		]);

		Category::create([
			'name' 	=> 'Confectionaries',
			'description' => 'Sandwiches, et al.'
		]);

		Category::create([
			'name' 	=> 'Candy',
			'description' => 'Indulge your sweet tooth'
		]);

		Category::create([
			'name' 	=> 'Beverages',
			'description' => 'Coffee, tea, et al.'
		]);

		Category::create([
			'name' 	=> 'Shakes',
			'description' => 'Milkshakes, fruit shakes, et al.'
		]);
    }

}