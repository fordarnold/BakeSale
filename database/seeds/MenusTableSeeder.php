<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder {

    public function run()
    {
        Menu::create([
        	'name' => '2015 specials',
            'description' => 'All special meals served in 2015'
        ]);
    }

}