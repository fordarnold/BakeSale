<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder {

    public function run()
    {
        Tag::create([
        	'name' => 'marble cake'
        ]);
        Tag::create([
        	'name' => 'sandwich'
        ]);
        Tag::create([
        	'name' => 'salami'
        ]);
        Tag::create([
        	'name' => 'espresso'
        ]);
        Tag::create([
        	'name' => 'coffee'
        ]);
        Tag::create([
        	'name' => 'strong'
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