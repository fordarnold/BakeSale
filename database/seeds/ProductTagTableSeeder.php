<?php

use Illuminate\Database\Seeder;

use Bakesale\Product;

class ProductTagTableSeeder extends Seeder {

    public function run()
    {
        // attach tags to some products
        $product = Product::find(1);
        $product->tags()->attach(1);
        
        // Product::find(2)->tags()->attach(2);
        // Product::find(2)->tags()->attach(3);
        // Product::find(3)->tags()->attach(4);
        // Product::find(3)->tags()->attach(5);
        // Product::find(3)->tags()->attach(6);
    }

}