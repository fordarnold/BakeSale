<?php

use Illuminate\Database\Seeder;

use Bakesale\Product;

class MenuProductTableSeeder extends Seeder {

    public function run()
    {
        // attach menus to some products
        Product::find(1)->menus()->attach(1);
        Product::find(1)->menus()->attach(2);
        Product::find(2)->menus()->attach(2);
    }

}