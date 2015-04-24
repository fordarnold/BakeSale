<?php

use Illuminate\Database\Seeder;

use Bakesale\Tag;
use Bakesale\Product;

class TagsTableSeeder extends Seeder {

    public function run()
    {
        Tag::create([
        	'name' => 'marble cake',
            'approved' => true
        ]);
        Tag::create([
        	'name' => 'sandwich',
            'approved' => true
        ]);
        Tag::create([
        	'name' => 'salami',
            'approved' => true
        ]);
        Tag::create([
        	'name' => 'espresso',
            'approved' => true
        ]);
        Tag::create([
        	'name' => 'coffee',
            'approved' => true
        ]);
        Tag::create([
        	'name' => 'strong',
            'approved' => true
        ]);

        // attach tags to some products
        Product::find(1)->tags()->attach(1);
        Product::find(2)->tags()->attach(2);
        Product::find(2)->tags()->attach(3);
        Product::find(3)->tags()->attach(4);
        Product::find(3)->tags()->attach(5);
        Product::find(3)->tags()->attach(6);
    }

}