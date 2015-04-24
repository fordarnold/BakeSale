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
    }

}