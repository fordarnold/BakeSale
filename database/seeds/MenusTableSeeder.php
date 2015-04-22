<?php

use Illuminate\Database\Seeder;

use Bakesale\Menu;
use Bakesale\Product;

class MenusTableSeeder extends Seeder {

    public function run()
    {
        Menu::create([
        	'name' => '2015 specials',
            'description' => 'All special meals served in 2015'
        ]);

        Menu::create([
        	'name' => 'Happy hour specials',
            'description' => 'Enjoy the happy hour menu every friday at 8pm-10pm'
        ]);

        // attach menus to some products
        Product::find(1)->menus()->attach(1);
        Product::find(1)->menus()->attach(2);
        Product::find(2)->menus()->attach(2);
    }

}