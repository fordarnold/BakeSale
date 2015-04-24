<?php

use Illuminate\Database\Seeder;

use Bakesale\Loyalty;

class LoyaltiesTableSeeder extends Seeder {

    public function run()
    {
        Loyalty::create([
			'uid' => 'GLD2938SDE',
			'points' => 200,
			'category' => 'gold',
			'customer_id' => 1
		]);
    }

}