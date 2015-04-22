<?php

use Illuminate\Database\Seeder;

use Bakesale\Loyalty;

class LoyaltiesTableSeeder extends Seeder {

    public function run()
    {
        Loyalty::create([
			'uid' => 'AX2938SDE',
			'points' => 'John',
			'customer_id' => 1
		]);
    }

}